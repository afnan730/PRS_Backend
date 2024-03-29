<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front_desk_birth_report_data_controller;
use App\Http\Controllers\front_desk_patients_controller;
use App\Http\Controllers\front_desk_statistics_supplement_controller;
use App\Http\Controllers\front_desk_statistic_form_controller;

use App\Http\Controllers\general_doctor_house_officer_in_patient_follow_up_sheet_controller;

use App\Http\Controllers\nurse_and_vice_doctor_i_v_fluids_form_controller;
use App\Http\Controllers\nurse_anticoagulation_chart_controller;
use App\Http\Controllers\nurse_investigation_form_controller;
use App\Http\Controllers\nurse_observation_form_controller;
use App\Http\Controllers\nurse_progress_notes_controller;

use App\Http\Controllers\users_controller;

use App\Http\Controllers\vice_doctor_antenatal_admission_follow_up_sheet_controller;
use App\Http\Controllers\vice_doctor_antenatal_admission_sheet_controller;
use App\Http\Controllers\vice_doctor_antenatal_follow_up_controller;
use App\Http\Controllers\vice_doctor_anticoagulation_chart_controller;
use App\Http\Controllers\vice_doctor_as_required_and_post_operative_drugs_form_controller;
use App\Http\Controllers\vice_doctor_blood_products_and_i_v_fluids_controller;
use App\Http\Controllers\vice_doctor_clinical_discharge_summary_controller;
use App\Http\Controllers\vice_doctor_delivery_and_postnatal_controller;
use App\Http\Controllers\vice_doctor_discharge_drugs_controller;
use App\Http\Controllers\vice_doctor_dr_progress_notes_controller;
use App\Http\Controllers\vice_doctor_haematology_results_controller;
use App\Http\Controllers\vice_doctor_investigation_request_form_controller;
use App\Http\Controllers\vice_doctor_labour_record_form_controller;
use App\Http\Controllers\vice_doctor_labour_ward_admission_form_controller;
use App\Http\Controllers\vice_doctor_labour_ward_instructions_controller;
use App\Http\Controllers\vice_doctor_obstetrical_history_controller;
use App\Http\Controllers\vice_doctor_operation_note_controller;
use App\Http\Controllers\vice_doctor_treatment_order_sheet_controller;
use App\Http\Controllers\vice_doctor_regular_drugs_controller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//front desk birt report data api
Route::get('get_front_desk_birth_report_data/{patient_id}', [front_desk_birth_report_data_controller::class, 'get_front_desk_birth_report_data']);
Route::post('post_front_desk_birth_report_data', [front_desk_birth_report_data_controller::class, 'post_front_desk_birth_report_data']);

//front desk patients api
Route::get('get_all_front_desk_patients/', [front_desk_patients_controller::class, 'get_all_front_desk_patients']);
Route::get('get_front_desk_patients/{patient_id}', [front_desk_patients_controller::class, 'get_front_desk_patients']);
Route::post('post_front_desk_patients', [front_desk_patients_controller::class, 'post_front_desk_patients']);

//front desk statistics supplement api
Route::get('get_front_desk_statistics_supplement/{patient_id}', [front_desk_statistics_supplement_controller::class, 'get_front_desk_statistics_supplement']);
Route::post('post_front_desk_statistics_supplement', [front_desk_statistics_supplement_controller::class, 'post_front_desk_statistics_supplement']);

//front desk statistic form api
Route::get('get_front_desk_statistic_form/{patient_id}', [front_desk_statistic_form_controller::class, 'get_front_desk_statistic_form']);
Route::post('post_front_desk_statistic_form', [front_desk_statistic_form_controller::class, 'post_front_desk_statistic_form']);

//Search Front desk api
Route::get('search_patients/{patient_id_or_name}', [front_desk_patients_controller::class, 'search_patients']);

//general doctor house officer in patient follow up sheet api
Route::get('get_general_doctor_house_officer_in_patient_follow_up_sheet/{patient_id}', [general_doctor_house_officer_in_patient_follow_up_sheet_controller::class, 'get_general_doctor_house_officer_in_patient_follow_up_sheet']);
Route::post('post_general_doctor_house_officer_in_patient_follow_up_sheet', [general_doctor_house_officer_in_patient_follow_up_sheet_controller::class, 'post_general_doctor_house_officer_in_patient_follow_up_sheet']);

//nurse and vice doctor i v fluids form api
Route::get('get_nurse_and_vice_doctor_i_v_fluids_form/{patient_id}', [nurse_and_vice_doctor_i_v_fluids_form_controller::class, 'get_nurse_and_vice_doctor_i_v_fluids_form']);
Route::post('post_nurse_and_vice_doctor_i_v_fluids_form', [nurse_and_vice_doctor_i_v_fluids_form_controller::class, 'post_nurse_and_vice_doctor_i_v_fluids_form']);

//nurse anticoagulation chart
Route::get('get_nurse_anticoagulation_chart/{patient_id}', [nurse_anticoagulation_chart_controller::class, 'get_nurse_anticoagulation_chart']);
Route::post('post_nurse_anticoagulation_chart', [nurse_anticoagulation_chart_controller::class, 'post_nurse_anticoagulation_chart']);

// nurse investigation form api
Route::get('get_nurse_investigation_form/{patient_id}', [nurse_investigation_form_controller::class, 'get_nurse_investigation_form']);
Route::post('post_nurse_investigation_form', [nurse_investigation_form_controller::class, 'post_nurse_investigation_form']);

//nurse observation form api
Route::get('get_nurse_observation_form/{patient_id}', [nurse_observation_form_controller::class, 'get_nurse_observation_form']);
Route::post('post_nurse_observation_form', [nurse_observation_form_controller::class, 'post_nurse_observation_form']);

//nurse progress notes api
Route::get('get_nurse_progress_notes/{patient_id}', [nurse_progress_notes_controller::class, 'get_nurse_progress_notes']);
Route::post('post_nurse_progress_notes', [nurse_progress_notes_controller::class, 'post_nurse_progress_notes']);

//user login api
Route::get('login/{user_id}/{password}', [users_controller::class, 'login']);
Route::post('post_login', [users_controller::class, 'post_login']);

//users api
Route::get('get_all_users/', [users_controller::class, 'get_all_users']);
Route::get('get_users/{national_id}', [users_controller::class, 'get_users']);
Route::post('post_users', [users_controller::class, 'post_users']);
Route::put('update_user/', [users_controller::class, 'update_user']);
Route::delete('delete_user/{id}', [users_controller::class, 'delete_user']);
//Search users api
Route::get('search_users/{national_id_or_name}', [users_controller::class, 'search_users']);
//get_vice_doctor_antenatal_admission_follow_up_sheet api
Route::get('get_vice_doctor_antenatal_admission_follow_up_sheet/{patient_id}', [vice_doctor_antenatal_admission_follow_up_sheet_controller::class, 'get_vice_doctor_antenatal_admission_follow_up_sheet']);
Route::post('post_vice_doctor_antenatal_admission_follow_up_sheet', [vice_doctor_antenatal_admission_follow_up_sheet_controller::class, 'post_vice_doctor_antenatal_admission_follow_up_sheet']);

//vice doctor antenatal admission sheet api
Route::get('get_vice_doctor_antenatal_admission_sheet/{patient_id}', [vice_doctor_antenatal_admission_sheet_controller::class, 'get_vice_doctor_antenatal_admission_sheet']);
Route::post('post_vice_doctor_antenatal_admission_sheet', [vice_doctor_antenatal_admission_sheet_controller::class, 'post_vice_doctor_antenatal_admission_sheet']);

//vice doctor antenatal follow up api
Route::get('get_vice_doctor_antenatal_follow_up/{patient_id}', [vice_doctor_antenatal_follow_up_controller::class, 'get_vice_doctor_antenatal_follow_up']);
Route::post('post_vice_doctor_antenatal_follow_up', [vice_doctor_antenatal_follow_up_controller::class, 'post_vice_doctor_antenatal_follow_up']);

//vice doctor anticoagulation chart api
Route::get('get_vice_doctor_anticoagulation_chart/{patient_id}', [vice_doctor_anticoagulation_chart_controller::class, 'get_vice_doctor_anticoagulation_chart']);
Route::post('post_vice_doctor_anticoagulation_chart', [vice_doctor_anticoagulation_chart_controller::class, 'post_vice_doctor_anticoagulation_chart']);

//vice doctor as required and post operative drugs form api
Route::get('get_vice_doctor_as_required_and_post_operative_drugs_form/{patient_id}', [vice_doctor_as_required_and_post_operative_drugs_form_controller::class, 'get_vice_doctor_as_required_and_post_operative_drugs_form']);
Route::post('post_vice_doctor_as_required_and_post_operative_drugs_form', [vice_doctor_as_required_and_post_operative_drugs_form_controller::class, 'post_vice_doctor_as_required_and_post_operative_drugs_form']);

//vice doctor blood products and i v fluids api
Route::get('get_vice_doctor_blood_products_and_i_v_fluids/{patient_id}', [vice_doctor_blood_products_and_i_v_fluids_controller::class, 'get_vice_doctor_blood_products_and_i_v_fluids']);
Route::post('post_vice_doctor_blood_products_and_i_v_fluids', [vice_doctor_blood_products_and_i_v_fluids_controller::class, 'post_vice_doctor_blood_products_and_i_v_fluids']);

//vice doctor clinical discharge summary api
Route::get('get_vice_doctor_clinical_discharge_summary/{patient_id}', [vice_doctor_clinical_discharge_summary_controller::class, 'get_vice_doctor_clinical_discharge_summary']);
Route::post('post_vice_doctor_clinical_discharge_summary', [vice_doctor_clinical_discharge_summary_controller::class, 'post_vice_doctor_clinical_discharge_summary']);

//vice doctor delivery and postnatal api
Route::get('get_vice_doctor_delivery_and_postnatal/{patient_id}', [vice_doctor_delivery_and_postnatal_controller::class, 'get_vice_doctor_delivery_and_postnatal']);
Route::post('post_vice_doctor_delivery_and_postnatal', [vice_doctor_delivery_and_postnatal_controller::class, 'post_vice_doctor_delivery_and_postnatal']);

//vice doctor discharge drugs api
Route::get('get_vice_doctor_discharge_drugs/{patient_id}', [vice_doctor_discharge_drugs_controller::class, 'get_vice_doctor_discharge_drugs']);
Route::post('post_vice_doctor_discharge_drugs', [vice_doctor_discharge_drugs_controller::class, 'post_vice_doctor_discharge_drugs']);

//vice doctor dr progress notes api
Route::get('get_vice_doctor_dr_progress_notes/{patient_id}', [vice_doctor_dr_progress_notes_controller::class, 'get_vice_doctor_dr_progress_notes']);
Route::post('post_vice_doctor_dr_progress_notes', [vice_doctor_dr_progress_notes_controller::class, 'post_vice_doctor_dr_progress_notes']);

//vice doctor haematology results api
Route::get('get_vice_doctor_haematology_results/{patient_id}', [vice_doctor_haematology_results_controller::class, 'get_vice_doctor_haematology_results']);
Route::post('post_vice_doctor_haematology_results', [vice_doctor_haematology_results_controller::class, 'post_vice_doctor_haematology_results']);

//vice doctor investigation request form api
Route::get('get_vice_doctor_investigation_request_form/{patient_id}', [vice_doctor_investigation_request_form_controller::class, 'get_vice_doctor_investigation_request_form']);
Route::post('post_vice_doctor_investigation_request_form', [vice_doctor_investigation_request_form_controller::class, 'post_vice_doctor_investigation_request_form']);

//vice doctor labour record form api
Route::get('get_vice_doctor_labour_record_form/{patient_id}', [vice_doctor_labour_record_form_controller::class, 'get_vice_doctor_labour_record_form']);
Route::post('post_vice_doctor_labour_record_form', [vice_doctor_labour_record_form_controller::class, 'post_vice_doctor_labour_record_form']);

//vice doctor labour ward admission form
Route::get('get_vice_doctor_labour_ward_admission_form/{patient_id}', [vice_doctor_labour_ward_admission_form_controller::class, 'get_vice_doctor_labour_ward_admission_form']);
Route::post('post_vice_doctor_labour_ward_admission_form', [vice_doctor_labour_ward_admission_form_controller::class, 'post_vice_doctor_labour_ward_admission_form']);

//vice doctor labour ward instructions api
Route::get('get_vice_doctor_labour_ward_instructions/{patient_id}', [vice_doctor_labour_ward_instructions_controller::class, 'get_vice_doctor_labour_ward_instructions']);
Route::post('post_vice_doctor_labour_ward_instructions', [vice_doctor_labour_ward_instructions_controller::class, 'post_vice_doctor_labour_ward_instructions']);

//vice doctor obstetrical history api
Route::get('get_vice_doctor_obstetrical_history/{patient_id}', [vice_doctor_obstetrical_history_controller::class, 'get_vice_doctor_obstetrical_history']);
Route::post('post_vice_doctor_obstetrical_history', [vice_doctor_obstetrical_history_controller::class, 'post_vice_doctor_obstetrical_history']);

//vice doctor operation note api
Route::get('get_vice_doctor_operation_note/{patient_id}', [vice_doctor_operation_note_controller::class, 'get_vice_doctor_operation_note']);
Route::post('post_vice_doctor_operation_note', [vice_doctor_operation_note_controller::class, 'post_vice_doctor_operation_note']);

//vice_doctor_regular_drugs api
Route::get('get_vice_doctor_regular_drugs/{patient_id}', [vice_doctor_regular_drugs_controller::class, 'get_vice_doctor_regular_drugs']);
Route::post('post_vice_doctor_regular_drugs', [vice_doctor_regular_drugs_controller::class, 'post_vice_doctor_regular_drugs']);

//vice doctor treatment order sheet api
Route::get('get_vice_doctor_treatment_order_sheet/{patient_id}', [vice_doctor_treatment_order_sheet_controller::class, 'get_vice_doctor_treatment_order_sheet']);
Route::post('post_vice_doctor_treatment_order_sheet', [vice_doctor_treatment_order_sheet_controller::class, 'post_vice_doctor_treatment_order_sheet']);
