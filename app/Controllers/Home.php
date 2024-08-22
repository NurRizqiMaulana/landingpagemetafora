<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function iot(): string
    {
        return view('pages/iot_page');
    }

    public function porto(): string
    {
        return view('pages/portofolio_page');
    }

    public function pos(): string
    {
        return view('pages/point_of_sales_page');
    }

    public function purchasing(): string
    {
        return view('pages/purchasing_system_page');
    }

    public function technews(): string
    {
        return view('pages/tech_news_page');
    }

    public function warehouse(): string
    {
        return view('pages/warehouse_management_page');
    }

    public function finance(): string
    {
        return view('pages/finance_and_budgeting_page');
    }

    public function accounting(): string
    {
        return view('pages/accounting_system_page');
    }

    public function architect(): string
    {
        return view('pages/architect_management_page');
    }

    public function webds(): string
    {
        return view('pages/web_development_services_page');
    }

    public function webdp(): string
    {
        return view('pages/web_development_pricelist_page');
    }

    public function lab(): string
    {
        return view('pages/legal_and_administration_page');
    }

    public function audit(): string
    {
        return view('pages/audit_system_page');
    }

    public function projectms(): string
    {
        return view('pages/project_management_page');
    }

    public function taxs(): string
    {
        return view('pages/tax_system_page');
    }

    public function bussiness(): string
    {
        return view('pages/bussiness_intelligence_page');
    }

    public function coba(): string
    {
        return view('welcome_message');
    }
}