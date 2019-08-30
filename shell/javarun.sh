#!/bin/sh

FILE=${1}
JAVA=${FILE##*/}
JAVAFILE=${JAVA%.*}

if [ `echo $1 | grep /` ]; then # 絶対パス､相対パスの処理
	DIR=$PWD #現在のディレクトリの格納
	CD=${FILE%/*} #移動先のディレクトリ
	cd ${CD}/ && java ${JAVA} && java ${JAVAFILE} && rm *.class && cd ${DIR}
else
	javac ${JAVA} && java ${JAVAFILE} && rm *.class
fi
