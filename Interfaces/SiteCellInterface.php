<?php

namespace BasicApp\Site\Interfaces;

interface SiteCellInterface
{
	public function layout(array $params = []) : string;
	public function page(array $params = []) : string;
	public function header(array $params = []) : string;
	public function footer(array $params = []) : string;
	public function nav(array $params = []) : string;
}