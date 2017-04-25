<?php
/**
 * Redux Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Redux Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Redux Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     ReduxFramework
 * @subpackage  Field_footer_links
 * @author      Luciano "WebCaos" Ubertini
 * @author      Daniel J Griffiths (Ghost1227)
 * @author      Dovy Paukstys
 * @version     3.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Don't duplicate me!
if (!class_exists('ReduxFramework_footer_links')) {

    /**
     * Main ReduxFramework_footer_links class
     *
     * @since       1.0.0
     */
    class ReduxFramework_footer_links extends ReduxFramework{

        /**
         * Field Constructor.
         *
         * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        function __construct( $field = array(), $value ='', $parent ) {

            //parent::__construct( $parent->sections, $parent->args );
            $this->parent = $parent;
            $this->field = $field;
            $this->value = $value;

            $this->enqueue();
        }

        /**
         * Field Render Function.
         *
         * Takes the vars and outputs the HTML for the field in the settings
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function render() {

            //print_r($this->value);

            echo '<div class="redux-footer_links-accordion">';

            $x = 0;

            if (isset($this->value) && is_array($this->value)) {

                $footer_linkss = $this->value;

                foreach ($footer_linkss as $footer_links) {

                    if ( empty( $footer_links ) ) {
                        continue;
                    }

                    $defaults = array(
                        'title' => '',
                        'new_window' => 0,
                        'sort' => '',
                        'url' => '',
                        'color' => '',
                        'border-color' => '',
                        'background' => '',
                        'color:hover' => '',
                        'border-color:hover' => '',
                        'background:hover' => '',
                        'select' => array(),
                    );
                    $footer_links = wp_parse_args( $footer_links, $defaults );


                    echo '<div class="redux-footer_links-accordion-group"><fieldset class="redux-field redux-container-select" data-id="'.$this->field['id'].'"><h3><span class="redux-footer_links-header">' . $footer_links['title'] . '</span></h3><div>';


                    echo '<ul id="' . $this->field['id'] . '-ul" class="redux-footer_links-list">';
                    echo '<li class="p--half"><label>Text</label> <input type="text" id="' . $this->field['id'] . '-title_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][title]" value="' . esc_attr($footer_links['title']) . '" placeholder="'.__('Label', 'redux-framework').'" class="full-text footer_links-title" /></li>';
                    echo '<li class="p--half custom--left"><label>URL</label> <input type="text" id="' . $this->field['id'] . '-url_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][url]" value="' . esc_attr($footer_links['url']) . '" class="full-text" placeholder="'.__('Link', 'redux-framework').'" /></li>';
                    echo '<li><input type="hidden" class="footer_links-sort" name="' . $this->field['name'] . '[' . $x . '][sort]" id="' . $this->field['id'] . '-sort_' . $x . '" value="' . $footer_links['sort'] . '" /></li>';

                    if ( isset( $this->field['options'] ) && !empty( $this->field['options'] ) ) {
                        $placeholder = (isset($this->field['placeholder']['options'])) ? esc_attr($this->field['placeholder']['options']) : __( 'Select an Icon', 'redux-framework' );

                        if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                            $select2_params = json_encode( esc_attr( $this->field['select2'] ) );
                            $select2_params = htmlspecialchars( $select2_params , ENT_QUOTES);
                            echo '<input type="hidden" class="select2_params" value="'. $select2_params .'">';
                        }

                        echo '<label class="for--select">Icon</label> <select id="'.$this->field['id'].'-select" data-placeholder="'.$placeholder.'" name="' . $this->field['name'] . '[' . $x . '][select]" class="font-awesome-icons s--icons redux-select-item '.$this->field['class'].'" rows="6">';
                            echo '<option></option>';

                            foreach($this->field['options'] as $k => $v){
                                if (is_array($this->value)) {
                                    $selected = $footer_links['select'] == $k ?' selected="selected"':'';
                                } else {
                                    $selected = selected($this->value['select'], $k, false);
                                }
                                echo '<option value="'.$k.'"'.$selected.'>'.$v.'</option>';
                            }//foreach
                        echo '</select>';
                    }

                    echo '<li><label for="' . $this->field['id'] . '-new_window_' . $x . '"><input type="checkbox" id="' . $this->field['id'] . '-new_window_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][new_window]" value="1" class="checkbox footer_links-new_window_" '.($footer_links['new_window'] == 1 ? 'checked="checked"' : '').' /> Force open in new Window/Tab</label></li>';

                    // Color
                    echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-color-' . $x . '"><strong>Color</strong> </label>
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][color]" id="' . $this->field['id'] . '-color-' . $x . '" value="' . esc_attr($footer_links['color']) . '" />
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][color:hover]" id="' . $this->field['id'] . '-color-hover-' . $x . '" value="' . esc_attr($footer_links['color:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-color:hover-' . $x . '"><strong>:hover</strong> </label></li>';

                    // Border Color
                    echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-color' . $x . '"><strong>Border Color</strong> </label>
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][border-color]" id="' . $this->field['id'] . '-color' . $x . '" value="' . esc_attr($footer_links['border-color']) . '" />
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][border-color:hover]" id="' . $this->field['id'] . '-color-bdh' . $x . '" value="' . esc_attr($footer_links['border-color:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-color-bdh' . $x . '"><strong>:hover</strong> </label>
                    </li>';

                    // Background
                    echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-background' . $x . '"><strong>Background</strong> </label>
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][background]" id="' . $this->field['id'] . '-background' . $x . '" value="' . esc_attr($footer_links['background']) . '" />
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][background:hover]" id="' . $this->field['id'] . '-background-hvr' . $x . '" value="' . esc_attr($footer_links['background:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-background-hvr' . $x . '"><strong>:hover</strong> </label>
                    </li>';

                    

                    echo '<li style="margin-top: 10px;"><strong>IMPORTANT!</strong> If you add new field, <strong>Save Changes</strong> and after insert your <strong>colors</strong></li>';

                    echo '<li><a href="javascript:void(0);" class="button deletion redux-footer_links-remove">' . __('Delete Link', 'redux-framework') . '</a></li>';
                    echo '</ul></div></fieldset></div>';
                    $x++;

                }
            }

            if ($x == 0) {
                echo '<div class="redux-footer_links-accordion-group"><fieldset class="redux-field redux-container-select" data-id="'.$this->field['id'].'"><h3><span class="redux-footer_links-header">New Link</span></h3><div>';


                echo '<ul id="' . $this->field['id'] . '-ul" class="redux-footer_links-list">';
                $placeholder = (isset($this->field['placeholder']['title'])) ? esc_attr($this->field['placeholder']['title']) : __( 'Label', 'redux-framework' );
                echo '<li class="p--half"><label>Text</label> <input type="text" id="' . $this->field['id'] . '-title_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][title]" value="" placeholder="'.$placeholder.'" class="full-text footer_links-title" /></li>';
                $placeholder = (isset($this->field['placeholder']['url'])) ? esc_attr($this->field['placeholder']['url']) : __( 'Link', 'redux-framework' );
                echo '<li class="p--half custom--left"><label>URL</label> <input type="text" id="' . $this->field['id'] . '-url_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][url]" value="" class="full-text" placeholder="'.$placeholder.'" /></li>';
                echo '<li><input type="hidden" class="footer_links-sort" name="' . $this->field['name'] . '[' . $x . '][sort]" id="' . $this->field['id'] . '-sort_' . $x . '" value="' . $x . '" /></li>';

                if ( isset( $this->field['options'] ) && !empty( $this->field['options'] ) ) {
                    $placeholder = (isset($this->field['placeholder']['select'])) ? esc_attr($this->field['placeholder']['select']) : __( 'Select an Icon', 'redux-framework' );
                    if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                        $select2_params = json_encode( esc_attr( $this->field['select2'] ) );
                        $select2_params = htmlspecialchars( $select2_params , ENT_QUOTES);
                        echo '<input type="hidden" class="select2_params" value="'. $select2_params .'">';
                    }

                    echo '<label class="for--select">Icon</label> <select id="'.$this->field['id'].'-select" data-placeholder="'.$placeholder.'" name="' . $this->field['name'] . '[' . $x . '][select]" class="font-awesome-icons s--icons redux-select-item '.$this->field['class'].'" rows="6" style="width:93%;">';
                        echo '<option></option>';
                        foreach($this->field['options'] as $k => $v){
                            if (is_array($this->value)) {
                                $selected = (is_array($this->value) && in_array($k, $this->value))?' selected="selected"':'';
                            } else {
                                $selected = selected($this->value, $k, false);
                            }
                            echo '<option value="'.$k.'"'.$selected.'>'.$v.'</option>';
                        }//foreach
                    echo '</select>';
                }

                echo '<li><label for="' . $this->field['id'] . '-new_window_' . $x . '"><input type="checkbox" id="' . $this->field['id'] . '-new_window_' . $x . '" name="' . $this->field['name'] . '[' . $x . '][new_window]" value="1" class="checkbox footer_links-new_window_" '.($footer_links['new_window'] == 1 ? 'checked="checked"' : '').' /> Force open in new Window/Tab</label></li>';

                // Color
                echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-color-' . $x . '"><strong>Color</strong> </label>
                <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][color]" id="' . $this->field['id'] . '-color-' . $x . '" value="' . esc_attr($footer_links['color']) . '" />
                <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][color:hover]" id="' . $this->field['id'] . '-color-hover-' . $x . '" value="' . esc_attr($footer_links['color:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-color:hover-' . $x . '"><strong>:hover</strong> </label>
                </li>';

                // Border Color
                echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-color' . $x . '"><strong>Border Color</strong> </label>
                <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][border-color]" id="' . $this->field['id'] . '-color' . $x . '" value="' . esc_attr($footer_links['border-color']) . '" />
                <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][border-color:hover]" id="' . $this->field['id'] . '-color-bdh' . $x . '" value="' . esc_attr($footer_links['border-color:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-color-bdh' . $x . '"><strong>:hover</strong> </label>

                </li>';

                // Background
                echo '<li><label class="label-color--picker" for="' . $this->field['id'] . '-background' . $x . '"><strong>Background</strong> </label>
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][background]" id="' . $this->field['id'] . '-background' . $x . '" value="' . esc_attr($footer_links['background']) . '" />
                    <input type="text" class="color--picker" name="' . $this->field['name'] . '[' . $x . '][background:hover]" id="' . $this->field['id'] . '-background-hvr' . $x . '" value="' . esc_attr($footer_links['background:hover']) . '" /><label class="label-color--picker" for="' . $this->field['id'] . '-background-hvr' . $x . '"><strong>:hover</strong> </label>

                    </li>';

                echo '<li style="margin-top: 10px;"><strong>IMPORTANT!</strong> If you add new field, <strong>Save Changes</strong> and after insert your <strong>colors</strong></li>';

                echo '<li><a href="javascript:void(0);" class="button deletion redux-footer_links-remove">' . __('Delete Link', 'redux-framework') . '</a></li>';
                echo '</ul></div></fieldset></div>';
            }
            echo '</div><a href="javascript:void(0);" class="button redux-footer_links-add button-primary" rel-id="' . $this->field['id'] . '-ul" rel-name="' . $this->field['name'] . '[title][]">' . __('Add Link', 'redux-framework') . '</a><br/>';

        }

        /**
         * Enqueue Function.
         *
         * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */

        public function enqueue() {

            wp_enqueue_script(
                'redux-field-footer_links-js',
                plugins_url( 'field-footer-links.js' , __FILE__ ),
                array('jquery', 'jquery-ui-core', 'jquery-ui-accordion', 'wp-color-picker', 'select2-js'),
                time(),
                true
            );

            wp_enqueue_script(
                'colorpicker-premio',
                plugins_url( 'colorpicker-premio.js' , __FILE__ ),
                array(),
                time(),
                true
            );

            wp_enqueue_style(
                'redux-field-footer_links-css',
                plugins_url( 'field-footer-links.css' , __FILE__ ),
                time(),
                true
            );

            wp_enqueue_style(
                'colorpicker-premio',
                plugins_url( 'colorpicker-premio.css' , __FILE__ ),
                time(),
                true
            );

        }

        public function output() {

            for ($i = 0, $counter = count($this->value); $i < $counter; $i++) {

                $item = $this->value[$i];

                $smartCounter = $this->value[$i]['sort'] + 1;

                $style = 'color: '. $item['color'] .';background: '. $item['background'] .';border-color: '. $item['border-color'] .';';

                $fieldCss = array('.minigo .nav-social a:nth-child('.$smartCounter.')');

                $css = Redux_Functions::parseCSS( $fieldCss, $style, $item['color'] );
                $this->parent->outputCSS .= $css;
            }

            for ($x = 0, $counter = count($this->value); $x < $counter; $x++) {

                $item = $this->value[$x];

                $smartCounter = $this->value[$x]['sort'] + 1;

                $style = 'color: '. $item['color:hover'] .';background: '. $item['background:hover'] .';border-color: '. $item['border-color:hover'] .';';


                $fieldCss = array('.minigo .nav-social a:hover:nth-child('.$smartCounter.')');

                $css = Redux_Functions::parseCSS( $fieldCss, $style, $item['color'] );
                $this->parent->outputCSS .= $css;
            }

        }

    }
}
