<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chat-room-{id}', function ($user, $id) {
    //if((int) $user->id === (int) $id) {
    	return true;//['name' => $user->name];
    //}
});
