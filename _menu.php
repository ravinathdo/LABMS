
<?php
                if ($_SESSION['user']['role_code'] == 'ADMIN') {
                    include './_menu_admin.php'; 
                } else
                if ($_SESSION['user']['role_code'] == 'MANAGER') {
                    include './_menu_manager.php'; 
                } else
                if ($_SESSION['user']['role_code'] == 'CASHIER') {
                    include './_menu_cashier.php'; 
                } else
                if ($_SESSION['user']['role_code'] == 'MLT') {
                    include './_menu_MLT.php'; 
                }else
                if ($_SESSION['user']['role_code'] == 'PATIENT') {
                    include './_menu_patient.php'; 
                }
                ?>
