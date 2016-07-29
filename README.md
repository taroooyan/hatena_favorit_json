Get favorite users of Hatena bookmark
====
## Description
Response to JSON of user lists from Hatebu(b.hatena.ne.jp/)

## Requirement
- PHP 5.6
- Goutte

## Install
`php composer.phar install`

## Usage
Access to
`/?id=userid` then response to JSON.
### Format
```
[
    {
        "profile-image": "http://cdn1.www.st-hatena.com/users/******1/profile_l.gif",
        "username": "*****1"
    }, 
    {
        "profile-image": "http://cdn1.www.st-hatena.com/users/******2/profile_l.gif",
        "username": "*****2"
    }
]
```
