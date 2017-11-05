# protobuf-php-workshop

Protrocol Buffers with PHP Workshop

## Objectives

- Install protocol buffer compiler
- Write proto message files
- Compile proto message files into PHP Classes
- Build & install Official Protocol buffers extension
- Write code to create protobuf serialized messages
- Write code to receive protobuif serialized messages

## Prerequisites

- An understanding of simple data types like 32bit & 64bit integers, doubles, floats, strings, bytes and booleans
- An understanding of data structures like enumerations and maps (arrays, hashmaps, hashtables, etc)
- A PHP 5.6.* runtime environment on MacOS or Linux (preferred) and/or PHP 7.* runtime environment on any operating system
- `php-pear` and `php-devel` packages with binaries in path
- A text editor
- A terminal to execute commands
- Appropriate privileges to install PHP extensions in your environment (admin / sudo)
- If using MacOS as your runtime, you need Homebrew

## Preparation

To make the most of our time, please complete the following before arriving to the conference as venue & hotel wifi may be unreliable.

1. Install protoc
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

1. Download the protobuf library source
```bash
cd /tmp
wget https://github.com/google/protobuf/archive/v3.4.1.tar.gz
tar -xzf v3.4.1.tar.gz
```

1. Install PHP extension dependencies
```bash
# Debian / Ubuntu dependencies
sudo apt-get install autoconf automake libtool make gcc

# RHEL / CentOS dependencies
sudo yum install autoconf automake libtool make gcc
```
