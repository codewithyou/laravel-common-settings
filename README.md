#   laravel-common-settings
A settings package which you can store  key=value pair in database and access via $app->config->get('settings->your-key')



#   Description
You can modify the url as flows ,fill key & value ,then generate a new key=value pair
which is store is database . and can access by $app->config->get('setting.your-key)


# APIS & USAGE
## add an key-value pair
`$app->settings->set(key,value)`

## get the value for the key 
`$app->config('settings.YOUR-KEY')`

## delete an key-value pair
` $app->settings->get(key)`


## via facedes
`Config::get('settings.YOU-KEY');`


#   Demo
## set up this project 
* config .env file set dbname db user 
* run php artisan migrate 
* open broswer and visit yousite

##  generate an key=value pair 
URL Format :`http://www.yoursite.com/generate/key/{mykey}/value/{myvalue}`

## retrive the saved k=>v pair
Echo :`http://www.yoursite.com/generate/key/{mykey}`



#  TODO 
* File driver implemention
* Broadcast when data is changed 
* install via composer command.


# Screenshot
![Demo](https://github.com/codewithyou/laravel-common-settings/blob/master/ScreenShot/Snip20171004_1.png?raw=true " ")



