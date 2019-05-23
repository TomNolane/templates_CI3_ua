<?php
function setUtm($link, $value)
{
    if (strpos($link, 'guruleads'))
        $link = $link.'?sub1='.$value;
    else if(strpos($link, 'kviku'))
        $link = $link.'';
    else if(strpos($link, 'g24.me'))
        $link = $link.'?subid='.$value;
    else if(strpos($link, 'tech'))
        $link = $link.'&sub1='.$value;
    else if(strpos($link, 'leadgid'))
        $link = $link.'?source='.$value;
    else if(strpos($link, 'leadbrothers'))
        $link = $link.'?s1='.$value;
    else
        $link = $link.'?source='.$value;

    return $link;
}