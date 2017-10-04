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



#  TODO 
* File driver implemention
* Broadcast when data is changed 
* install via composer command.


