<?php
if (false) {

    class XFCP_ThemeHouse_ShowRedirExp_Extend_XenForo_Model_Thread extends XenForo_Model_Thread
    {
    }
}

class ThemeHouse_ShowRedirExp_Extend_XenForo_Model_Thread extends XFCP_ThemeHouse_ShowRedirExp_Extend_XenForo_Model_Thread
{
	const FETCH_ThemeHouse_ShowRedirExp_REDIRECT = 0x01;
	
	
	public function prepareThreadFetchOptions(array $fetchOptions)
	{
	    $threadFetchOptions = parent::prepareThreadFetchOptions($fetchOptions);
	    
	    $selectFields = '';
	    $joinTables = '';
	    $orderBy = '';
	
	    if (!empty($fetchOptions['th_join_showredirexpiry']))
	    {
	        if ($fetchOptions['th_join_showredirexpiry'] & self::FETCH_ThemeHouse_ShowRedirExp_REDIRECT)
	        {
	            $threadFetchOptions['selectFields'] .= ',
					th_showredirexpiry_thread_redirect.expiry_date';
	            $threadFetchOptions['joinTables'] .= '
					LEFT JOIN xf_thread_redirect AS th_showredirexpiry_thread_redirect ON
						(th_showredirexpiry_thread_redirect.thread_id = thread.thread_id)';
	        }
	    }
	    
	    return $threadFetchOptions;
	}
}