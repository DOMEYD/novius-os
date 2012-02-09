<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Cms\Blog;

use Fuel\Core\Config;

use Cms\Controller_Mp3table_List;

use Asset, Format, Input, Session, View, Uri;

class Controller_Admin_List extends Controller_Mp3table_List {

    public function before() {


/*
        Config::load('cms_blog::mp3grid', true);
		$this->mp3grid = \Config::getFromUser('cms_blog::mp3grid', array());
 */
        parent::before();
    }


    public function action_delete($id) {


        $success = false;

        $billet = Model_Blog::find_by_blog_id($id);
        if ($billet) {
            $billet->delete();
            $success = true;
        }

        \Response::json(array(
			'success' => $success,
		));
    }


}
