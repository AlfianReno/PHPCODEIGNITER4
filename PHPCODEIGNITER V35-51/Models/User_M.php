<?php 
    namespace App\Models;

    use CodeIgniter\Model;
    
    class User_M extends Model
    {
        protected $table = 'tbluser';

        protected $allowedFields = ['user', 'email', 'password', 'level', 'aktif'];

        protected $primaryKey = 'iduser';

        protected $validationRules = [
            'user'     => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
            'email'     => 'valid_email'
        ];

        protected $validationMessages = [
                'user'        => [
                'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
                'min_length' => 'Minimal 3 huruf', 
                'is_unique' => 'Data User Sudah terpakai'
                ],

                'email'        => [
                'valid_email' => 'Email Salah'
            
            ]
        ];
    }
?>