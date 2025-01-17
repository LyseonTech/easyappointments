<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      T. Saedt <https://github.com/Tthecreator>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.4.2
 * ---------------------------------------------------------------------------- */

/**
 * Class Migration_Add_show_fields_setting
 *
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 */
class Migration_Add_show_fields_setting extends CI_Migration {
    /**
     * Upgrade method.
     */
    public function up()
    {
        $this->db->insert('settings', [
            'name' => 'show_phone_number',
            'value' => '1'
        ]);

        $this->db->insert('settings', [
            'name' => 'show_address',
            'value' => '1'
        ]);

        $this->db->insert('settings', [
            'name' => 'show_city',
            'value' => '1'
        ]);

        $this->db->insert('settings', [
            'name' => 'show_zip_code',
            'value' => '1'
        ]);

        $this->db->insert('settings', [
            'name' => 'show_notes',
            'value' => '1'
        ]);


    }

    /**
     * Downgrade method.
     */
    public function down()
    {
        $this->db->delete('settings', ['name' => 'show_phone_number']);
        $this->db->delete('settings', ['name' => 'show_address']);
        $this->db->delete('settings', ['name' => 'show_city']);
        $this->db->delete('settings', ['name' => 'show_zip_code']);
        $this->db->delete('settings', ['name' => 'show_notes']);
    }
}
