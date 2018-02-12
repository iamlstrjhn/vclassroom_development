
if not DEFINED IS_MINIMIZED set IS_MINIMIZED=1 && start "" /min "%~dpnx0" %* && exit
echo off
cls
echo ---------------------------
echo    SERVER HAS NOW STARTED
echo ---------------------------

explorer "http://localhost:3000"
php -S localhost:3000
