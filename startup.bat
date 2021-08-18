type dot.txt>>README.md
set  commitmsg = "Changed README"
git status

git add .
git commit -m "%commitmsg"
git push origin main
pause