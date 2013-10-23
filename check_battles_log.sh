#!/bin/sh
# import test_table.sql into test_database.test_table

FILE_PATH=$1

checkPath()
{
    for file in `find $1`
    do
        if test -f $file
        then
            echo $file 是文件
        else
            echo $file 是目录
        fi
    done
}

checkPath $FILE_PATH
