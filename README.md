#Stream Sampler

Stream sampler that picks a random (representative) sample of size k from a stream of values with unknown and possibly very large length.

###Reservoir Sampling

> Reservoir sampling is a family of randomized algorithms for randomly choosing a sample of k items from a list S containing n items, where n is either a very large or unknown number. Typically n is large enough that the list doesn't fit into main memory. The most common example was labelled Algorithm R by Jeffrey Vitter in his paper on the subject. ([© wikipedia](http://en.wikipedia.org/wiki/Reservoir_sampling))

-----
[![Build Status](https://travis-ci.org/htimur/stream-sampler.svg?branch=master)](https://travis-ci.org/htimur/stream-sampler)

##Usage

####Prerequisites

This project needs PHP 5.5+.

It has been tested using PHP5.5, PHP5.6 and HHVM.

####Parameters

| Name         | Description                 |
| ------------ | --------------------------- |
| --length, -k | Sample length, default 5    |
| --input, -i  | Input data (string, url)    |
| --random, -r | Use random string as input  |


```bash
$ bin/sampler -r
```
```bash
$ bin/sampler -i THEQUICKBROWNFOXJUMPSOVERTHELAZYDOG
```
```bash
$ bin/sampler -i "http://www.random.org/strings/?num=100&len=8&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain&rnd=new"
```
```bash
$ curl -s 0 "http://www.random.org/strings/?num=100&len=8&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain&rnd=new" | bin/sampler --length=20
```

##Tests

You can run tests locally with

```bash
$ phpunit
```

##TODO

Implemnent stratagy to use different algorithm if k >= len(S) / 3 (Reservoir Sampling isn't efficient in this case there are more suitable ones)

##Feedback

Add an issue, open a PR, drop an email! I would love to hear from you!
