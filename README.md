# protobuf-php-workshop

Protrocol Buffers with PHP Workshop

## Objectives

After participating in this workshop, you should be able to:

- install protocol buffer compiler
- write & compile proto message files
- build & install Official Protocol buffers extension
- write code to create protobuf serialized messages
- write code to receive protobuif serialized messages

## Prerequisites

- An understanding of simple data types like 32bit & 64bit integers, doubles, floats, strings, bytes and booleans
- An understanding of data structures like enumerations and maps (arrays, hashmaps, hashtables, etc)
- A PHP 7.* runtime environment on any operating system (preferred MacOS or Linux)
- `php-pear` and `php-devel` packages with binaries in path
- A text editor
- A terminal to execute commands
- Appropriate privileges to install PHP extensions in your environment (admin / sudo)

## Preparation

To make the most of our time, please complete the following before arriving to the conference as venue & hotel wifi may be unreliable.

- Clone this repository

- Install protoc compiler
```bash
# MacOS
brew install protobuf

# Linux
wget https://github.com/google/protobuf/releases/download/v3.4.0/protoc-3.4.0-linux-x86_64.zip
unzip protoc-3.4.0-linux-x86_64.zip -d protoc3

sudo mv protoc3/bin/* /usr/local/bin/
sudo mv protoc3/include/* /usr/local/include/
sudo chmod ugo+rx /usr/local/bin/protoc
```

- Download the protobuf library source
```bash
cd /tmp
wget https://github.com/google/protobuf/archive/v3.4.1.tar.gz
tar -xzf v3.4.1.tar.gz
```

- Install PHP extension dependencies
```bash
# Debian / Ubuntu dependencies
sudo apt-get install autoconf automake libtool make gcc

# RHEL / CentOS dependencies
sudo yum install autoconf automake libtool make gcc
```

## Workshop Agenda

1. Introduction to Protocol buffers
1. Installing runtime package via Composer
1. Installing runtime extension
1. Writing .proto message files
1. Compiling .proto message files
1. Message class review
1. Write server code
1. Write client code
1. Test
1. QnA

## Follow along commands

This section will contain snippets of commands/code to make it easier to follow along, you may need to modify the lines for your environment.

### Installing runtime extension

```bash
cd /tmp/protobuf-3.4.1/php/ext/google/protobuf/

# LICENSE file needs to be in cwd
cp /tmp/protobuf-3.4.1/LICENSE ./LICENSE

pear package

sudo pecl install protobuf-3.4.1.tgz

php -i | grep 'Additional .ini files'

echo 'extension=protobuf.so' | sudo tee /etc/php/7.0/cli/conf.d/protobuf.ini

php -m | grep protobuf
```
