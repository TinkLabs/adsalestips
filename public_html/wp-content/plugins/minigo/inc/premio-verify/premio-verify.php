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
if (!class_exists('ReduxFramework_premio_verify_user')) {

    /**
     * Main ReduxFramework_premio_verify_user class
     *
     * @since       1.0.0
     */
    class ReduxFramework_premio_verify_user extends ReduxFramework{

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

            global $premiothemes_comingsoon_minigo, $minigo_version;
            require(plugin_dir_path(__FILE__) . 'Envato.php');
            require(plugin_dir_path(__FILE__) . 'update-notifier.php');

            $Envato = new Envato();
            $Envato->set_api_key('af019rwq3j4t828hgjl34uocmfb1rnkx');
            $purchase_code = $premiothemes_comingsoon_minigo['purchase-key'];

            if( !empty($purchase_code) ) {

                $verify = $Envato->verify_purchase('premioThemes', $purchase_code);
                $item = $Envato->item_details('6709886');

                if( $verify && $item ) {
                    if( $verify->item_id == $item->id ) {
                        global $buyer;
                        $buyer = $verify->buyer;

                            echo '<div class="verify-buyer notice-green">';
                            echo 'Greetings <strong>' . $verify->buyer . '</strong>, thank you for purchasing' . ' <strong>' . $verify->item_name . '</strong> ';
                            echo '</div>';
                            notify_me();
                    }
                }

            }

            echo '<div class="popular_from_us">
                <i class="premioThemes-icon"></i><h3>Popular from PremioThemes</h3>
            </div>';
            $newFiles = $Envato->new_files_from_user('premioThemes', 'codecanyon');
            echo '<ul class="premio-popular--items">';

            foreach ($newFiles as $newPremioFiles) {
                echo '<li>
                <a class="premio-popular--item" href="'. $newPremioFiles->url .'" target="_blank">
                    <div class="premio-item--hover"><img src="'. $newPremioFiles->live_preview_url .'" alt="'. $newPremioFiles->item .'"></div>
                    <img src="'. $newPremioFiles->thumbnail .'" alt="'. $newPremioFiles->item .'">
                </a>
                <span><i class="premio--star"></i><small>'. $newPremioFiles->rating_decimal .'</small></span>
                </li>';
            }

            echo '</ul>';
            
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
                'premio_verify_user-js',
                plugins_url( 'premio-verify.js' , __FILE__ ),
                array('jquery', 'jquery-ui-core'),
                time(),
                true
            );
            
            wp_enqueue_style(
                'premio_verify_user-css',
                plugins_url( 'premio-verify.css' , __FILE__ ),
                time(),
                true
            );

        }

    }
}
