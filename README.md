## Friends

An advanced modern async in-game friends list system for PocketMine-MP Servers using firebase API

### Developer docs
#### Deprecated in 0.0.2
_~~You will need to config the config.yml that is generated by the plugin after running the server once.

make sure you set the project id to the one given by firebase [here](https://support.google.com/googleapi/answer/7014113?hl=en)~~_

Make sure you get your JSON key in 
 * windows: %APPDATA%/gcloud/application_default_credentials.json
 * others: $HOME/.config/gcloud/application_default_credentials.json
 
To get the instance of friends run the following

```php
use CTMCentral\FriendsList\FriendAPI;

$frindapi = new FriendAPI();
```

//TODO