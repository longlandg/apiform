<?php

function makeBodyJson($userTitle, $userFirstName)
{
    $body = new stdClass();
    $body->test_lead = true;
    $body->aff_id = 161;
    $body->aff_password = "XfXaQWmUWjhhBZKWv0gwHTa";
    $body->sub_id = "101245";
    $body->referring_website = "www.some-loan-company.co.uk";
    $body->loan_purpose = "other";
    $body->loan_amount = 1250;
    $body->loan_term = 12;
    $body->title = $userTitle;
    $body->first_name = $userFirstName;
    $body->middle_name = "test";
    $body->last_name = "TestGeorge";
    $body->date_of_birth = "30-11-1999";
    $body->marital_status = "single";
    $body->number_of_dependents = 0;
    $body->house_number = 2;
    $body->house_name = "clifford house";
    $body->flat_number = 2;
    $body->street_name = "clifford avenue";
    $body->city = "manchester";
    $body->county = "greater manchester";
    $body->post_code = "m20 2hw";
    $body->residential_status = "private_tenant";
    $body->address_move_in_date = "08-03-2016";
    $body->mobile_number = "07000000001";
    $body->mobile_phone_type = "contract";
    $body->home_number = "01611111111";
    $body->work_number = "01611111111";
    $body->email_address = "test@mediablanket.co.uk";
    $body->employment_status = "full_time";
    $body->payment_frequency = "weekly";
    $body->payment_method = "uk_direct_deposit";
    $body->monthly_income = 1250.24;
    $body->next_pay_date = "28-04-2023";
    $body->following_pay_date = "05-05-2023";
    $body->job_title = "webmaster";
    $body->employer_name = "mediablanket";
    $body->employer_industry = "health";
    $body->employment_start_date = "03-01-2017";
    $body->expenditure_housing = 50.75;
    $body->expenditure_credit = 50.75;
    $body->expenditure_transport = 50.75;
    $body->expenditure_food = 50.75;
    $body->expenditure_utilities = 50.75;
    $body->expenditure_other = 50.75;
    $body->bank_name = "rbs";
    $body->bank_account_number = "12345678";
    $body->bank_sort_code = "12-34-56";
    $body->bank_card_type = "visa_debit";
    $body->consent_email_sms = false;
    $body->consent_credit_search = true;
    $body->consent_financial = true;
    $body->user_agent = "Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko)Chrome\\/51.0.2704.103 Safari\\/537.36";
    $body->ip_address = "192.168.1.1";

    $jsonBody = json_encode($body);

    return $jsonBody;
}