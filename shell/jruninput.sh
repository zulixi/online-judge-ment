#! /bin/bash
file=`basename ${1} .java`
dir=`dirname ${1}`
PWD=`pwd`

cd $dir && javac ${1} && java ${file} < ${2} > ./output/output.txt  2> ./output/error.txt && return_code=$? && rm "${file}.class"


if [ $return_code = 0 ]; then
    echo "java実行完了"
else
  echo "java実行失敗"
fi
