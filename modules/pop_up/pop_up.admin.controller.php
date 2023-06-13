<?php
    /**
     * @class  pop_upAdminController
     * @author zirho (zirho6@gmail.com)
     * @brief  pop_up ����� admin controller class
     **/

    class pop_upAdminController extends pop_up {

        /**
         * @brief �ʱ�ȭ
         **/
        function init() {
        }

        /**
         * @brief �˾� ��� �ý��� ���� �Է�
         **/
		function procPop_upAdminInsertPopupData(){
			
			$oModuleModel = &getModel('module');
			$ouput = $oModuleModel->isIDExists($this->module);
			if(!$output){
				// module �� pop_up ������ �Է�
				$site_module_info = Context::get('site_module_info');
				$args->site_srl = $site_module_info->site_srl;
				$args->mid = $this->module;
				$args->module = $this->module;

				$oModuleController = &getController('module');
				$output = $oModuleController->insertModule($args);

				// �˾� ���� �ؽ�Ʈ ������ ���� ����
				$module_srl = $output->get('module_srl');
				Context::set('target_module_srl', $module_srl);
				Context::set('editor_height', '200');
				Context::set('enable_autosave', 'N');

				$oEditorController = &getController('editor');
				$oEditorController->procEditorInsertModuleConfig();
			}
		}

        /**
         * @brief �˾� ���� �߰�
         **/
        function procPop_upAdminInsertPopupConn() {

            // ����� ���� ����
            $args = Context::getRequestVars();

			// �˾� ���� ����
            $args->title = $args->popup_name;
            $oDocumentController = &getController('document');

            // �˾� ����� model/controller ��ü ����
            $oPopupController = &getController('pop_up');
            $oPopupModel = &getModel('pop_up');
			
			// popup_conn_srl�� �Ѿ���� �� ����� �ִ��� Ȯ��
			if($args->popup_conn_srl) {
                $popup_conn_info = $oPopupModel->getPop_upInfoByPopupSrl($args->popup_conn_srl);
                if($popup_conn_info->popup_conn_srl != $args->popup_conn_srl) unset($args->popup_conn_srl);
            }
			
			$args->document_srl = $popup_conn_info->document_srl;

            // module_srl�� ���� ���� insert/update
            if(!$args->popup_conn_srl) {

				$output = $oDocumentController->insertDocument($args);			
				$args->document_srl = $output->get('document_srl');

                $args->popup_conn_srl = getNextSequence();
                $output = $oPopupController->procPop_upInsertPopupConn($args);
                $msg_code = 'success_registed';
            } else {
				
				$oDocumentModel = &getModel('document');
				$oDocument = $oDocumentModel->getDocument($popup_conn_info->document_srl, $this->grant->manager);

				$oDocumentController = &getController('document');
				$output = $oDocumentController->updateDocument($oDocument, $args);			

                $output = $oPopupController->procPop_upUpdatePopupConn($args);
                $msg_code = 'success_updated';

                // ĳ�� ���� ����
                $cache_file = sprintf("./files/cache/pop_up/%d.cache.php", $popup_conn_info->popup_conn_srl);
                if(file_exists($cache_file)) FileHandler::removeFile($cache_file);
            }

            if(!$output->toBool()) return $output;

            // ��� ������ return�� �޼��� ����
            $this->add("popup_conn_srl", $output->get('popup_conn_srl'));
            $this->setMessage($msg_code);
        }

        /**
         * @brief �˾� ����
         **/
        function procPop_upAdminDeletePopupConn() {
            $popup_conn_srl = Context::get('popup_conn_srl');

            // ������ ���ؿ´�
            $oPopupController = &getController('pop_up');
			$args->popup_conn_srl = $popup_conn_srl;
            $output = $oPopupController->procPop_upDeletePopupConn($args);
            if(!$output->toBool()) return $output;

            //$this->add('module','popup');
            $this->add('page',Context::get('page'));
            $this->setMessage('success_deleted');
        }
    }
?>
