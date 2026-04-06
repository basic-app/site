<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Cells;

use BasicApp\Site\Interfaces\SiteCellInterface;
use BasicApp\ThemeBootstrap5\Cells\Bootstrap5Cell;

class SiteCell extends Bootstrap5Cell implements SiteCellInterface
{
	public function layout(array $params = []) : string
	{
        return view_cell('SiteLayoutCell', $params);
    }
	
	public function page(array $params = []) : string
	{
        return view_cell('SitePageCell', $params);
	}

	public function header(array $params = []) : string
	{
        return view_cell('SiteHeaderCell', $params);
	}

	public function footer(array $params = []) : string
	{
        return view_cell('SiteFooterCell', $params);
	}

	public function nav(array $params = []) : string
	{
        return view_cell('SiteNavCell', $params);
	}
} 