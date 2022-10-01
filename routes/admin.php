<?php
use Illuminate\Support\Facades\Route;
//login admin
Route::group(['namespace'=>'Auth','prefix'=>'admin/auth','middleware'=>'AdminGuest','as'=>'admin.auth.'],function(){
    Route::get('/login','AdminController@login')->name('login');
    Route::post('/login','AdminController@login_submit')->name('login_submit');
});
//logout admin
Route::post('admin/logout','Auth\AdminController@logout')->name('admin.logout')->middleware('Admin');

//reset admin users password
Route::group(['namespace'=>'Auth','prefix'=>'admin/reset','as'=>'admin.reset.'],function(){
    Route::get('/mail','AdminController@mail')->name('mail');
    Route::post('/mail_submit','AdminController@mail_submit')->name('mail_submit');
    Route::get('/reset_password_form/{token}','AdminController@reset_password_form')->name('reset_password_form');
    Route::post('/reset_password_submit','AdminController@reset_password_submit')->name('reset_password_submit');
});

//admin controls
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>'Admin'],function(){
    //dashboard
    Route::get('/','IndexController@index')->name('index');

    //dashboard
    Route::resource('tests','TestsController');

    //profile
    Route::group(['prefix'=>'profile','as'=>'profile.'],function(){
        Route::get('edit','ProfileController@edit')->name('edit');
        Route::post('update','ProfileController@update')->name('update');
    });

    //tests and its components
    Route::resource('tests','TestsController');
    Route::get('get_tests','TestsController@ajax')->name('get_tests');//datatable

    //countries
    Route::resource('countries','CountriesController');
    Route::post('get_country_details','CountriesController@ajax')->name('get_country_details');

    //antibiotics
    Route::resource('antibiotics','AntibioticsController');
    Route::get('get_antibiotics','AntibioticsController@ajax')->name('get_antibiotics');

    //patients
    Route::resource('patients','PatientsController');
    Route::get('get_patients','PatientsController@ajax')->name('get_patients');
    Route::get('patients_export','PatientsController@export')->name('patients.export');
    Route::get('patients_download_template','PatientsController@download_template')->name('patients.download_template');
    Route::post('patients_import','PatientsController@import')->name('patients.import');

    //labs
    Route::resource('labs','LabsController');
    Route::get('get_labs','LabsController@ajax')->name('get_labs');
    Route::post('get_lab_centers','LabsController@get_lab_centers')->name('get_lab_centers');
    Route::get('labs_export','LabsController@export')->name('labs.export');
    Route::get('labs_download_template','LabsController@download_template')->name('labs.download_template');
    Route::post('labs_import','LabsController@import')->name('labs.import');

    //Airlines
    Route::resource('airlines','AirlinesController');
    Route::get('get_airlines','AirlinesController@ajax')->name('get_airlines');
    Route::get('labs_export','AirlinesController@export')->name('airlines.export');
    Route::get('labs_download_template','AirlinesController@download_template')->name('airlines.download_template');
    Route::post('labs_import','AirlinesController@import')->name('airlines.import');

	//Discount Role
    Route::resource('discountrole','DiscountRoleController');
    Route::get('get_discountrole','DiscountRoleController@ajax')->name('get_discountrole');
    Route::get('discountrole_export','DiscountRoleController@export')->name('discountrole.export');
    Route::get('discountrole_download_template','DiscountRoleController@download_template')->name('discountrole.download_template');
    Route::post('discountrole_import','DiscountRoleController@import')->name('discountrole.import');

    //centers
    Route::resource('centers','CentersController');
    Route::get('get_centers','CentersController@ajax')->name('get_centers');
    Route::get('centers_export','CentersController@export')->name('centers.export');
    Route::get('centers_download_template','CentersController@download_template')->name('centers.download_template');
    Route::post('centers_import','CentersController@import')->name('centers.import');

    //Test Unit
    Route::resource('units','UnitsController');
    Route::get('get_units','UnitsController@ajax')->name('get_units');
    Route::get('units_export','UnitsController@export')->name('units.export');
    Route::get('units_download_template','UnitsController@download_template')->name('units.download_template');
    Route::post('units_import','CentersController@import')->name('units.import');
    //payment
    Route::resource('payments','PaymentController');
    Route::get('get_payments','PaymentController@ajax')->name('get_payments');
    //machine
    Route::resource('machine','MachineController');
    Route::get('get_machine','MachineController@ajax')->name('get_machine');
   //section
   Route::resource('section','SectionsController');
   Route::get('get_section','SectionsController@ajax')->name('get_section');
   //Faranchises
    Route::resource('faranchises','FaranchisesController');
    Route::get('get_faranchises','FaranchisesController@ajax')->name('get_faranchises');
    Route::get('faranchises_export','FaranchisesController@export')->name('faranchises.export');
    Route::get('faranchises_download_template','FaranchisesController@download_template')->name('faranchises.download_template');
    Route::post('faranchises_import','FaranchisesController@import')->name('faranchises.import');

    //Supervisors Shift
    Route::resource('supervisorshift','SupervisorshiftController');
    Route::get('get_supervisorshift','SupervisorshiftController@ajax')->name('get_supervisorshift');
    Route::get('supervisorshift_export','SupervisorshiftController@export')->name('supervisorshift_export');
    Route::get('supervisorshift_download_template','SupervisorshiftController@download_template')->name('supervisorshift.download_template');
    Route::post('supervisorshift_import','SupervisorshiftController@import')->name('supervisorshift.import');

    //Users Shift
    Route::resource('usershift','UsershiftController');
    Route::get('get_usershift','UsershiftController@ajax')->name('usershift');
    Route::get('usershift_export','UsershiftController@export')->name('usershift_export');
    Route::get('usershift_download_template','UsershiftController@download_template')->name('usershift.download_template');
    Route::post('usershift_import','UsershiftController@import')->name('usershift.import');

    //Sample
    Route::resource('sample','SampleController');
    Route::get('get_sample','SampleController@ajax')->name('sample');

    //Patterns
    Route::resource('pattern','PatternController');
    Route::get('get_pattern','PatternController@ajax')->name('pattern');
    Route::get('pattern_export','PatternController@export')->name('pattern_export');
    Route::get('pattern_download_template','PatternController@download_template')->name('pattern.download_template');
    Route::post('pattern_import','PatternController@import')->name('pattern.import');

    //Age Classification
    Route::resource('age_classification','AgeClassificationController');
    Route::get('get_age_classification','AgeClassificationController@ajax')->name('age_classification');
    Route::get('age_classification_export','AgeClassificationController@export')->name('age_classification_export');
    Route::get('age_classification_download_template','AgeClassificationController@download_template')->name('age_classification.download_template');
    Route::post('age_classification_import','AgeClassificationController@import')->name('age_classification.import');

    //Normal Range Heading
    Route::resource('normal_range_heading','NormalRangeHeadingController');
    Route::get('get_normal_range_heading','NormalRangeHeadingController@ajax')->name('normal_range_heading');
    Route::get('normal_range_heading_export','NormalRangeHeadingController@export')->name('normal_range_heading_export');
    Route::get('normal_range_heading_download_template','NormalRangeHeadingController@download_template')->name('normal_range_heading.download_template');
    Route::post('normal_range_heading_import','NormalRangeHeadingController@import')->name('normal_range_heading.import');

	//Product Registration
    Route::resource('product_registration','ProductRegistrationController');
    Route::get('get_product_registration','ProductRegistrationController@ajax')->name('product_registration');
    Route::get('product_registration_export','ProductRegistrationController@export')->name('product_registration_export');
    Route::get('product_registration_download_template','ProductRegistrationController@download_template')->name('product_registration.download_template');
    Route::post('product_registration_import','ProductRegistrationController@import')->name('product_registration.import');

	//Morphology Registration
    Route::resource('morphology_registration','MorphologyRegistrationController');
    Route::get('get_morphology_registration','MorphologyRegistrationController@ajax')->name('morphology_registration');
    Route::get('morphology_registration_export','MorphologyRegistrationController@export')->name('morphology_registration_export');
    Route::get('morphology_registration_download_template','MorphologyRegistrationController@download_template')->name('morphology_registration.download_template');
    Route::post('morphology_registration_import','MorphologyRegistrationController@import')->name('morphology_registration.import');

	//CBC Remarks
    Route::resource('cbc_remarks','CbcRemarksController');
    Route::get('get_cbc_remarks','CbcRemarksController@ajax')->name('cbc_remarks');
    Route::get('cbc_remarks_export','CbcRemarksController@export')->name('cbc_remarks_export');
    Route::get('cbc_remarks_download_template','CbcRemarksController@download_template')->name('cbc_remarks.download_template');
    Route::post('cbc_remarks_import','CbcRemarksController@import')->name('cbc_remarks.import');

	// Package Registrations
    Route::resource('package_registrations','PackageRegistrationsController');
    Route::get('get_package_registrations','PackageRegistrationsController@ajax')->name('package_registrations');
    Route::get('package_registrations_export','PackageRegistrationsController@export')->name('package_registrations_export');
    Route::get('package_registrations_download_template','PackageRegistrationsController@download_template')->name('package_registrations.download_template');
    Route::post('package_registrations_import','PackageRegistrationsController@import')->name('package_registrations.import');

	//Customer Registration
    Route::resource('customer_registration','CustomerRegistrationController');
    Route::get('get_customer_registration','CustomerRegistrationController@ajax')->name('customer_registration');
	Route::post('get_party_centers','CustomerRegistrationController@get_party_centers')->name('get_party_centers');
    Route::get('customer_registration_export','CustomerRegistrationController@export')->name('customer_registration_export');
    Route::get('customer_registration_download_template','CustomerRegistrationController@download_template')->name('customer_registration.download_template');
    Route::post('customer_registration_import','CustomerRegistrationController@import')->name('customer_registration.import');
    Route::post('customer_registration_doc','CustomerRegistrationController@doc_upload')->name('customer_registration.doc_upload');
    Route::post('customer_registration_doc_delete','CustomerRegistrationController@doc_delete')->name('customer_registration.doc_delete');

    //Customer Registration Lab
    Route::resource('customer_registration_lab','CustomerRegistrationLabController');

    //Customer Registration Centers
    Route::resource('customer_registration_center','CustomerRegistrationCenterController');

    //Customer Registration Price List
    Route::resource('customer_price_list','CustomerRegistrationPriceListController');
    Route::get('get_customer_price_list','CustomerRegistrationPriceListController@ajax')->name('customer_price_list');

	//Customer Registration Price List
    Route::resource('customer_price_list_discount','CustomerRegistrationPriceListDiscountController');

	//Faranchise Price List
    Route::resource('faranchise_price_list','FaranchisePriceListController');
    Route::get('get_faranchise_price_list','FaranchisePriceListController@ajax')->name('faranchise_price_list');

    //Faranchise Registration Price List
    Route::resource('faranchise_price_list_discount','FaranchisePriceListDiscountController');


    //departments
    Route::resource('departments','DepartmentsController');
    Route::get('get_departments','DepartmentsController@ajax')->name('get_departments');
    Route::get('departments_export','DepartmentsController@export')->name('departments.export');
    Route::get('departments_download_template','DepartmentsController@download_template')->name('departments.download_template');
    Route::post('departments_import','DepartmentsController@import')->name('departments.import');

    //specialization
    Route::resource('specializations','SpecializationsController');
    Route::get('get_specializations','SpecializationsController@ajax')->name('get_specializations');
    Route::get('specializations_export','SpecializationsController@export')->name('specializations.export');
    Route::get('specializations_download_template','SpecializationsController@download_template')->name('specializations.download_template');
    Route::post('specializations_import','SpecializationsController@import')->name('specializations.import');

    //organizations
    Route::resource('organizations','OrganizationController');
    Route::get('get_organizations','OrganizationController@ajax')->name('get_organizations');
    Route::get('organizations_export','OrganizationController@export')->name('organizations.export');
    Route::get('organizations_download_template','OrganizationController@download_template')->name('organizations.download_template');
    Route::post('organizations_import','OrganizationController@import')->name('organizations.import');

    //cultures
    Route::resource('cultures','CulturesController');
    Route::get('get_cultures','CulturesController@ajax')->name('get_cultures');//datatable

    //culture options
    Route::resource('culture_options','CultureOptionsController');
    Route::get('get_culture_options','CultureOptionsController@ajax')->name('culture_options.ajax');

    //groups
    Route::resource('groups','GroupsController');
    Route::post('groups/send_receipt_mail/{id}','GroupsController@send_receipt_mail')->name('groups.send_receipt_mail');
    Route::post('groups/delete_analysis/{id}','GroupsController@delete_analysis');
    Route::get('get_groups','GroupsController@ajax')->name('get_groups');
    Route::get('get_search','GroupsController@ajax_search')->name('get_search');
    Route::get('get_requested_invoices_search','GroupsController@ajax_requested_search')->name('get_requested_invoices_search');
    Route::get('searching','GroupsController@searching')->name('searching');
    Route::get('invoice_statuses','GroupsController@invoice_statuses')->name('invoice_statuses');
    Route::get('invoice_cancel_req/{id?}','GroupsController@invoice_cancel_req')->name('invoice_cancel_req');
    Route::post('groups/request_for_cancel','GroupsController@request_for_cancel')->name('groups.request_for_cancel');
    Route::post('groups/print_barcode/{group_id}','GroupsController@print_barcode')->name('groups.print_barcode');

    //groups_credits
    Route::resource('groups_credits','GroupsCreditsController');
    Route::post('groups_credits/send_receipt_mail/{id}','GroupsCreditsController@send_receipt_mail')->name('groups_credits.send_receipt_mail');
    Route::post('groups_credits/delete_analysis/{id}','GroupsCreditsController@delete_analysis');
    Route::get('get_groups_credits','GroupsCreditsController@ajax')->name('get_groups_credits');
    Route::post('groups_credits/print_barcode/{group_id}','GroupsCreditsController@print_barcode')->name('groups_credits.print_barcode');

    //doctors
    Route::resource('doctors','DoctorsController');
    Route::get('get_doctors','DoctorsController@ajax')->name('get_doctors');
    Route::get('doctors_export','DoctorsController@export')->name('doctors.export');
    Route::get('doctors_download_template','DoctorsController@download_template')->name('doctors.download_template');
    Route::post('doctors_import','DoctorsController@import')->name('doctors.import');

    //test_registration
    Route::resource('test_registration','TestRegistrationController');
    Route::get('get_test_registration','TestRegistrationController@ajax')->name('get_test_registration');

	//doctors qualifications
	Route::resource('doctorsqualifications','DoctorsQualificationsController');
    Route::get('get_doctors_qualifications','DoctorsQualificationsController@ajax')->name('get_doctors_qualifications');
    Route::post('get_details','DoctorsQualificationsController@get_details')->name('get_details');

	//doctors expertises
	Route::resource('doctorsexpertises','DoctorsExpertisesController');
    Route::get('get_doctors_expertises','DoctorsExpertisesController@ajax')->name('get_doctors_expertises');
    Route::post('get_details_expertises','DoctorsExpertisesController@get_details')->name('get_details_expertises');

	//doctors charges
	Route::resource('doctorscharges','DoctorsChargesController');
    Route::get('get_doctors_charges','DoctorsChargesController@ajax')->name('get_doctors_charges');
    Route::post('get_details_charges','DoctorsChargesController@get_details')->name('get_details_charges');

	//reports
    Route::resource('reports','ReportsController');
    Route::post('reports/pdf/{id}','ReportsController@pdf')->name('reports.pdf');
    Route::post('reports/update_culture/{id}','ReportsController@update_culture')->name('reports.update_culture');//update cultures
    Route::get('get_reports','ReportsController@ajax')->name('get_reports');
    Route::get('sign_report/{id}','ReportsController@sign')->name('reports.sign');
    Route::post('reports/send_report_mail/{id}','ReportsController@send_report_mail')->name('reports.send_report_mail');


    //roles
    Route::resource('roles','RolesController');
    Route::get('get_roles','RolesController@ajax')->name('get_roles');

    //users
    Route::resource('users','UsersController');
    Route::get('get_users','UsersController@ajax')->name('get_users');

    //tests price list
    Route::get('prices/tests','PricesController@tests')->name('prices.tests');
    Route::post('prices/tests','PricesController@tests_submit')->name('prices.tests_submit');
    Route::get('tests_prices_export','PricesController@tests_prices_export')->name('prices.tests_prices_export');
    Route::post('tests_prices_import','PricesController@tests_prices_import')->name('prices.tests_prices_import');

    //cultures price list
    Route::get('prices/cultures','PricesController@cultures')->name('prices.cultures');
    Route::post('prices/cultures','PricesController@cultures_submit')->name('prices.cultures_submit');
    Route::get('cultures_prices_export','PricesController@cultures_prices_export')->name('prices.cultures_prices_export');
    Route::post('cultures_prices_import','PricesController@cultures_prices_import')->name('prices.cultures_prices_import');

    //accounting reports
    Route::get('accounting','AccountingController@index')->name('accounting.index');
    Route::get('generate_report','AccountingController@generate_report')->name('accounting.generate_report');
    Route::get('doctor_report','AccountingController@doctor_report')->name('accounting.doctor_report');
    Route::get('generate_doctor_report','AccountingController@generate_doctor_report')->name('accounting.generate_doctor_report');

    //chat
    Route::get('chat','ChatController@index')->name('chat.index');

    //visits
    Route::resource('visits','VisitsController');
    Route::get('visits/create_tests/{id}','VisitsController@create_tests')->name('visits.create_tests');
    Route::get('get_visits','VisitsController@ajax')->name('get_visits');

    //branches
    Route::resource('branches','BranchesController');
    Route::get('get_branches','BranchesController@ajax')->name('get_branches');

    //contracts
    Route::resource('contracts','ContractsController');
    Route::get('get_contracts','ContractsController@ajax')->name('get_contracts');

    //expenses
    Route::resource('expenses','ExpensesController');
    Route::get('get_expenses','ExpensesController@ajax')->name('get_expenses');

    //expense categories
    Route::resource('expense_categories','ExpenseCategoriesController');
    Route::get('get_expense_categories','ExpenseCategoriesController@ajax')->name('get_expense_categories');

    //backups
    Route::resource('backups','BackupsController');

    //reporting
    Route::group(['prefix'=>'reporting','as'=>'reporting.'],function(){
        Route::get('customer_registrations','ReportingController@customer_registrations')->name('customer_registrations');
        Route::get('inactive_patients','ReportingController@inactive_patients')->name('inactive_patients');
        Route::get('daily_cash_reporting','ReportingController@daily_cash_reporting')->name('daily_cash_reporting');
        Route::get('daily_credit_reporting','ReportingController@daily_credit_reporting')->name('daily_credit_reporting');
        Route::get('patient_visit_report','ReportingController@patient_visit_report')->name('patient_visit_report');
        Route::get('patient_registration_report','ReportingController@patient_registration_report')->name('patient_registration_report');
        Route::get('test_history_report','ReportingController@test_history_report')->name('test_history_report');
    });

    //activity logs
    Route::resource('activity_logs','ActivityLogsController');
    Route::post('activity_logs_clear','ActivityLogsController@clear')->name('activity_logs.clear');
    Route::get('get_activity_logs','ActivityLogsController@ajax')->name('get_activity_logs');

    //settings
    Route::group(['prefix'=>'settings','as'=>'settings.'],function(){
        Route::get('/','SettingsController@index')->name('index');
        Route::post('info','SettingsController@info_submit')->name('info_submit');
        Route::post('emails','SettingsController@emails_submit')->name('emails_submit');
        Route::post('reports','SettingsController@reports_submit')->name('reports_submit');
        Route::post('sms','SettingsController@sms_submit')->name('sms_submit');
        Route::post('whatsapp','SettingsController@whatsapp_submit')->name('whatsapp_submit');
        Route::post('api_keys','SettingsController@api_keys_submit')->name('api_keys_submit');
    });

    //translations
    Route::resource('translations','TranslationsController');

    //updates
    Route::get('update/{version}','UpdatesController@update');
});
