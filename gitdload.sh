#!/bin/bash
echo "Создаем необходимые файлы..."
sleep 1.5
touch ./login
touch ./pass

echo "Введите Login:"
read l 
echo $l > ./login

echo "Введите Password:"
read p
echo $p > ./pass

echo -n "Вы уверены что хотите продолжить? (y(Да)/n(Нет)) "

read item
case "$item" in
    y|Y) echo "Ввели «y», продолжаем..."

		echo "#" > README.md
		git init
		git add .
		git commit -m "ecvauto.ru"
		echo "Введите ссылку на репозиторий:"
		read SRCD
		git remote add origin $SRCD 
		git push -u origin master

#https://login:pass@github.com/ignatiy/test.git
		
# здесь будет обработка процедуры заполнения логина и пароля

		rm ./login
		rm ./pass
		;;
    n|N) echo "Ввели «n», удаляем файлы и завершаем программу..."
		rm ./login
		rm ./pass
        exit 0
        ;;
esac
exit 0
