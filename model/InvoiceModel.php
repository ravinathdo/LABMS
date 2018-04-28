<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getInvoice($invoice_id){
    
    $sql = "SELECT ld_invoice.id,ld_invoice.BCN,ld_invoice.invoice_datetime,ld_invoice.status_code,ld_invoice.report_ready_date,ld_invoice.total_amount,
lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_patient.telephone,lb_patient.email,
lb_branch.branch_name,lb_branch.address,lb_branch.telephone AS branch_telephone FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id
WHERE ld_invoice.id = $invoice_id
";
    //echo $sql;
    return getData($sql);
}


?>