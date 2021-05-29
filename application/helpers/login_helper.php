<?php

function cek_login()
{
    // memanggil library dari CI di fungsi ini
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        // mencek role id
        $role_id = $ci->session->userdata('role_id');
        // mengambil url dari segmen
        $menu = $ci->uri->segment(1);

        // query tabel user menu = select * from user_menu where menu = $menu
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

        // ambil id dari tabel usermenu
        $menu_id = $queryMenu['id'];

        // query tabel user acces = select*user_acces_menu where role_id = $role_id, menu_id = $menu_id
        $queryAcces = $ci->db->get_where('user_acces_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($queryAcces->num_rows() < 1) {
            redirect('auth/blok');
        }
    }
}
