<?php

function genInviteCode()
{
    $rand = time().rand(1000, 9999);
    $md5 = md5($rand);
    return substr($md5, 0, 6);
}
