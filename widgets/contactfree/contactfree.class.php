<?php
    /**
     * vi:set sw=4 ts=4 expandtab enc=utf8:
     * @class contactfree
     * @author wiley (wiley@nurigo.net)
     * @brief contactfree
     * @version 0.1
     **/

    class contactfree extends WidgetHandler 
    {
        function proc($args) {
            // loadding language pack.
            Context::loadLang($this->widget_path."lang");

            Context::set('widget_info', $args);
            Context::set('rand_password', rand(10000, 99999));

            // 템플릿 컴파일
            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
            $tpl_file = 'contact';

            $oTemplate = &TemplateHandler::getInstance();
            return $oTemplate->compile($tpl_path, $tpl_file);
        }
    }
?>
