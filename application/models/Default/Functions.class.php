<?php
	class Functions
	{
		/**
		* Returns the breadcrumb array in human readable format
		*
		* @return Unfortunately we're displaying information so we'll return some HTML
		*/
		public static function breadcrumbs()
		{
			global $viewBreadcrumbs;
			
			if (isset($viewBreadcrumbs) && count($viewBreadcrumbs) > 0)
			{
				$crumbCount = 0;
				foreach($viewBreadcrumbs as $key => $value)
				{
					if ($crumbCount < count($viewBreadcrumbs))
						echo(" > ");
					
					$crumbCount++;
					if (count($viewBreadcrumbs) != $crumbCount)
						echo("<a href=\"" .$key ."\">");
						
					echo($value);
						
					if (count($viewBreadcrumbs) != $crumbCount)
						echo("</a>");
				}
			}
		}
	}  /*end of class Functions*/