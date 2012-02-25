<?php
	class Functions
	{
		/**
		* Returns the breadcrumb array in human readable format
		* Unfortunately we're displaying information so we'll echo some HTML
		*
		* @return boolean
		*/
		public static function breadcrumbs($breadcrumbs = NULL)
		{
			$viewBreadcrumbs = $breadcrumbs;
			
			if ($breadcrumbs == NULL)
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
				
				return true;
			}
			
			return false;
		}
	}  /*end of class Functions*/