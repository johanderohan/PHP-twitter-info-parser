<?php
	include("simple_html_dom.php");
	
	//CALL pasrseTwitter(); with 1º Argument twitter ID 2º: Tweets, Following or Followers
	$number = parseTwitter('johan2rohan','Tweets');
	echo $number;
	
	function parseTwitter($user,$info) {
		$htmlCode = file_get_html('https://twitter.com/' . $user);
		         
		 $i=0;
		 foreach($htmlCode->find('div[class=default-footer]') as $list) {
		 	foreach($list->find('strong') as $list2) {
		        $item[$i]     = $list2->plaintext;            
		        $twitter_info[] = $item;
		        
		        }
		        $i=$i+1;
		    }
		    
		    if($info=='Tweets'){
		    return $twitter_info[0][0];
		    }
		    if($info=='Following'){
		    return $twitter_info[1][0];
		    }
		    if($info=='Followers'){
		    return $twitter_info[2][0];
		    }
	}	
        
?>