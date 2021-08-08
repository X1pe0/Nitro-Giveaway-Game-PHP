# Nitro-Giveaway-Game
### Please read.
#### Discord Nitro Giveaway Game in PHP, this script is rather old from years ago to learn PHP so please excuse any unneeded code... Can definitely be implemented better. Created as a challenge to use browser cookies as a method of storing historical choices from client -> server. Used on Apache2 with PHP7 recently without issues (If you wish to use discord auth, included, php-curl needs to be enabled). No database needed, all flat file. Please note either the "users" folder needs 777 permissions and or owned by www-data.

## About
#### The game is real time using Ajax. If other users are playing at the same time, and an example user types the correct code, the game will finish and redirect to show the valid winner. There can be no duplicate numbers submitted meaning there is only 333 total codes available. There are 2 fake codes which will lead to the inevitable restart of the game for that user, and only 1 correct code. "Currently: 238".

## Administration
#### Unfortunately due to my novice skill set at the time when this was created, changing codes requires a bit of knowledge and repetitive code within game.php. However if you wish to simply reset the game. Clear out the file whowon with a 0 byte entry. Ensure no enter (/n) and or space is in this file. The game will automagicly reset for all players and redirect. 

## Tips/Recommendations 
#### Known vulnerabilities:
* Within the Web GUI, a user will have a hard time brute forcing codes. However, with a crafty python script, a user can brute codes using browser cookies and randomly selecting numbers up to 9 with 3 number combinations. 
* RCE can be done via crafting a PHP shell within the cookie data itself. This has been "patched" via using htmlspecialchars.
* Shared usernames. If two users have the same username; nothing is implemented to ensure duplication. A simple parse of cookies can be added to ensure strict client uploaded data. (If you decide to add this, basic discord auth can be implemented to sign in via discord.)
* Ensure your on a higher version of PHP then 5.2 to mitigate against CVE-2007-3806. When a user wins, glob is used to explode the dir of users to list players. (Also a potental RCE to break out of glob/path traversal. Patched using "htmlspecialchars".)
* Enable mod_security within Apache if you choose to use this script. As stated before, this code is at a novice level. I won't be updating this code as this script is several years old when I was new to PHP.
#### As it stands, this script is pretty “safe” to upload on a web server and run as is. Just ensure you have the newest version of PHP and expect jank experiences. Side note, why all the documentation for a borderline shitty script? I just would like to ensure whoever is downloading this for their discord server/to tinker with understands how to stay safe and knows of the potential risks of old code from a foreign computer. Stay safe out there, don’t get shell’d :). 
## Screenshots
#### Menu
![](https://nabyte.com/imgs/96ada819c77a66e029ac6559d938b4fb8ba96e7e1.png)
#### Game
![](https://nabyte.com/imgs/952ed5335c2547a519c83812b0019ed3f7b93d562.png)
#### Submitting a Number
![](https://nabyte.com/imgs/37f36b7961ffa978d7fe493e35aa0b16948c23354.png)
#### Wrong Code
![](https://nabyte.com/imgs/07b6c16747818fc1c7ecdbdb9ec8e32fd76d7b193.png)
#### Fake Code
![](https://nabyte.com/imgs/6804e9fe0cdb5452187140be2514a70aa0a0ac275.png)
#### Win
![](https://nabyte.com/imgs/a32e96bafa98e327318515d0d848754857b5d1216.png)
