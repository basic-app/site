<?php

namespace BasicApp\Site\Interfaces;

interface SiteThemeCell
{
    public function layout(array $params = []) : string;
    
    public function post(array $params = []) : string;
    
    public function posts(array $params = []) : string;
    
    public function postsItem(array $params = []) : string;
    
    public function header(array $params = []) : string;
    
    public function footer(array $params = []) : string;
    
    public function footerMenu(array $params = []) : string;
    
    public function footerMenuItem(array $params = []) : string;
    
    public function nav(array $params = []) : string;
    
    public function navMenu(array $params = []) : string;
    
    public function navMenuItem(array $params = []) : string;
    
    public function card(array $params = []) : string;
    
    public function pager(array $params = []) : string;
}