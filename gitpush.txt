git status
git add .
set /p commitmsg= "Enter commit msg: " 
git commit -m "%commitmsg"
git push origin main
pause
