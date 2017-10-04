#   laravel-common-settings
A settings package which you can store  key=value pair in database and access via $app->config->get('settings->your-key')



#   Description
You can modify the url as flows ,fill key & value ,then generate a new key=value pair
which is store is database . and can access by $app->config->get('setting.your-key)

#   Demo & Usage
##  generate an key=value pair 
URL Format :`http://www.yoursite.com/generate/key/{mykey}/value/{myvalue}`

## retrive the saved k=>v pair
Echo :`http://www.yoursite.com/generate/key/{mykey}`


# APIS
## add an key-value pair
`$app->settings->set(key,value)`

## get the value for the key 
`$app->config('setting.YOUR-KEY')`

## delete an key-value pair
` $app->settings->get(key)`

#  TODO 
* File driver implemention
* Broadcast when data is changed 
* install via composer command.


