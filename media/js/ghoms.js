
var d_count = 0;
var c_count = 0;
var m_count = 0;
var l_count = 0;
var p_count = 0;

$(document).ready(function () {
    /**
     * DIAGNOSIS
     */

    //create 1
    //createDiagnosis();

    $(".click_diagnosis").click(function () {
        createDiagnosis();
    });

    $('.table_diagnosis_js').on('click', 'tr .delete_row', function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        d_count--;
        if(d_count == 0){
            $('.diag-remark-field').text("");
        }
    });

    /**
     * CONSULTATION
     */

    //create 1
    //createConsultation();

    $(".click_consultation").click(function () {
        createConsultation();
    });

    $('.table_consultation_js').on('click', 'tr .delete_row', function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        c_count--;
    });

    /**
     * MEDECINE
     */

    //create 5
    for (var a = 0; a < 3; a++) {
        createTableMedicine();
    }

    $(".click_medicine").click(function () {
        createTableMedicine();
    });

    $('.table_medicine_js').on('click', 'tr .delete_row', function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        m_count--;
    });

    /**
     * LAB
     */

    //create 1
    //createTableLab();

    $(".click_lab").click(function () {
        createTableLab();
    });

    $('.table_lab_js').on('click', 'tr .delete_row', function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        l_count--;
        if(l_count == 0){
            $('.lab-remark-field').text("");
        }
    });

    /**
     * PROCEDURE
     */

    //create 1
    //createProcedure();

    $(".click_procedure").click(function () {
        createProcedure();
    });

    $('.table_procedure_js').on('click', 'tr .delete_row', function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        p_count--;
        if(p_count == 0){
            $('.procedure-remark-field').text("");
        }
    });

    $(document).on('change keyup','.price', function () {
        calculatePrice();
    });
});

function createDiagnosis() {
    if ($(".table_diagnosis_js tbody tr").length >= 1) {
        $("#template_diagnosis").clone().attr("id", "diagnosis_tr_" + d_count).removeClass("hidden").insertAfter(".table_diagnosis_js tbody tr:last");
        $("#diagnosis_tr_" + d_count).find(".diagnosis_picker").attr("name", "update[diagnosis][]").attr("required", "required").removeAttr("disabled").addClass('selectpicker').selectpicker('refresh');
        d_count++;
        if(d_count >=1){
            $textarea = "<textarea class='form-control' name='update[diagnosis_remark]' style='margin:8px' placeholder='Write Your Review' id='diagnosis_remark'></textarea>";
            $('.diag-remark-field').html($textarea);
        }
    }

    $(".table_diagnosis_js tbody").find(".selectpicker").selectpicker('refresh');
}

function createConsultation() {
    if ($(".table_consultation_js tbody tr").length >= 1) {
        $("#template_consultation").clone().attr("id", "consultation_tr_" + c_count).removeClass("hidden").insertAfter(".table_consultation_js tbody tr:last");
        $("#consultation_tr_" + c_count).find(".consult_price").attr("name", "update[consult_price][]").attr("required", "required").removeAttr("disabled");
        $("#consultation_tr_" + c_count).find(".consultation_picker").attr("name", "update[consultation][]").attr("required", "required").removeAttr("disabled").addClass('selectpicker').selectpicker('refresh');
        c_count ++;
    }
    $(".table_consultation_js tbody").find(".selectpicker").selectpicker('refresh');
}

function createTableLab() {
    if ($(".table_lab_js tbody tr").length >= 1) {
        $("#template_lab").clone().attr("id", "lab_tr_" + l_count).removeClass("hidden").insertAfter(".table_lab_js tbody tr:last");
        $("#lab_tr_" + l_count).find(".lab_price").attr("name", "update[lab_price][]").attr("required", "required").removeAttr("disabled");
        $("#lab_tr_" + l_count).find(".lab_picker").attr("name", "update[lab][]").attr("required", "required").removeAttr("disabled").addClass('selectpicker').selectpicker('refresh');
        l_count++;
        if(l_count >=1){
            $textarea = "<textarea class='form-control' name='update[lab_remark]' style='margin:8px' placeholder='Write Your Review' id='lab_remark'></textarea>";
            $('.lab-remark-field').html($textarea);
        }
    }

    $(".table_lab_js tbody").find(".selectpicker").selectpicker('refresh');
}


function createTableMedicine() {
    if ($(".table_medicine_js tbody tr").length >= 1) {
        $("#template_medicine").clone().attr("id", "medicine_tr_" + m_count).removeClass("hidden").insertAfter(".table_medicine_js tbody tr:last");
        $("#medicine_tr_" + m_count).find(".med_qty").attr("name", "update[med_qty][]").attr("required", "required").removeAttr("disabled");
        $("#medicine_tr_" + m_count).find(".med_dos").attr("name", "update[med_dos][]").attr("required", "required").removeAttr("disabled");
        $("#medicine_tr_" + m_count).find(".med_price").attr("name", "update[med_price][]").attr("required", "required").removeAttr("disabled");
        $("#medicine_tr_" + m_count).find(".med_picker").attr("name", "update[medicine][]").attr("required", "required").removeAttr("disabled").addClass('selectpicker').selectpicker('refresh');

        m_count++;
    }

    $(".table_medicine_js tbody").find(".selectpicker").selectpicker('refresh');
}

function createProcedure() {
    if ($(".table_procedure_js tbody tr").length >= 1) {
        $("#template_procedure").clone().attr("id", "procedure_tr_" + p_count).removeClass("hidden").insertAfter(".table_procedure_js tbody tr:last");
        $("#procedure_tr_" + p_count).find(".prod_price").attr("name", "update[prod_price][]").attr("required", "required").removeAttr("disabled");
        $("#procedure_tr_" + p_count).find(".prod_picker").attr("name", "update[procedure][]").attr("required", "required").removeAttr("disabled").addClass('selectpicker').selectpicker('refresh');        
        p_count++;
        if(p_count >=1){
            $textarea = "<textarea class='form-control' name='update[procedure_remark]' style='margin:8px' placeholder='Write Your Review' id='procedure_remark'></textarea>";
            $('.procedure-remark-field').html($textarea);
        }
    }

    $(".table_procedure_js tbody").find(".selectpicker").selectpicker('refresh');
}

function calculatePrice() {
    var total = 0;
    $(".price").each(function () {
        var input = $(this).val();
        total += Number(input);
    });

    var value = parseFloat(total);
    $('.total_price_label').text(value.toFixed(2) );
}