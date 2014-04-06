inotifywait -m -r -e close_write . | while read line
do
if [[ $line == *.php ]]
then
echo $line
hh_client  . # && echo " **** " && hhvm index.php && echo " *** "
fi

done
