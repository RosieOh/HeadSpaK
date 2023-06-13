<?php
    /**
     * @class  popup Model
     * @author zirho (zirho6.gmail.com)
     * @brief  popup ����� model class
     **/

    class pop_upModel extends pop_up {

        /**
         * @brief �ʱ�ȭ
         **/
        function init() {
        }

        /**
         * @brief �˾� ���� ��������
         **/
        function getPop_upInfoByPopupSrl($popup_conn_srl) {
            // �����͸� ������
            $args->popup_conn_srl = $popup_conn_srl;
            $output = executeQuery('pop_up.getPopupList', $args);
            if($output->data){
				if(is_array($output->data)) return array_pop($output->data);
				else return $output->data;
			}

            return ;
		}

        /**
         * @brief ���� ����� �˾� ���� ��������
         **/
		function getPop_upsForThisSrl($targets){
			$stamp = mktime();
			$stamp = date("Ymd", $stamp);
			$targets->curdate = $stamp;

			$output = executeQuery('pop_up.getPopupsForThisSrl', $targets);

			if($output->data) return $output->data;
			return;
		}
	}
?>