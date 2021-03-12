var currnetWallet;

window.onload = function () {
	dialog = document.getElementById("dialog");
};

(function () {
	'use strict';
	//get current address
	//const currentAddress = web3.eth.defaultAccount;
	_Connect();	
	var web3Provider;
	if (window.ethereum) {
		web3Provider = window.ethereum;
		try {
			window.ethereum.enable();
		} catch (error) {
			console.error("User denied account access");
		}
	} else if (window.web3) {
		web3Provider = window.web3.currentProvider;
	} else {
		web3Provider = new Web3.providers.HttpProvider('http://localhost:8545');
	}
	web3 = new Web3(web3Provider);
}());

function _Connect(callback) {
	if (typeof web3 !== 'undefined') {
		web3 = new Web3(window.web3.currentProvider);
		web3.version.getNetwork((err, netId) => {
			switch (netId) {
				case "1":
					callback('Switch Network', null);
					break;
				case "2":
					console.log('This is the deprecated Morden test network.');
					callback('Switch Network', null);
					break;
				case "3":
					console.log('Connected to the ropsten test network.');
					web3.eth.defaultAccount = web3.eth.accounts[0];
					if (!web3.eth.defaultAccount) {
						console.log('Log into metamask');
						_Connect(callback);
					} else {
						// Success
						console.log('Web3 ETH Account: ${web3.eth.defaultAccount}');
						callback(false, web3.eth.defaultAccount);
					}
					break;
				case "4":
					console.log('Connected to the rinkeby test network.');
					web3.eth.defaultAccount = web3.eth.accounts[0];
					currnetWallet = web3.eth.defaultAccount;
					if (!web3.eth.defaultAccount) {
						console.log('Log into metamask');
						_Connect(callback);
					} else {
						// Success
						console.log(web3.eth.defaultAccount);
						document.getElementById("wallet").value = currnetWallet;
						//callback(false, web3.eth.defaultAccount);
					}
					break;
				default:
					console.log('This is an unknown network.');
					callback('Switch Network', null);
			}
		});
	} else {
		console.log('Failed: Web3 instance required, try using MetaMask.');
		callback('Install Metamask', null);
	}
}
function encryptPw(callback){
    var pw = document.getElementById("pw").value;
    var pw2 = document.getElementById("pw2").value;
    if(pw != pw2){
      alert("密碼輸入錯誤!!");
      return false;
    }else{      
      callback();
      return true;
    }
  }

  function setNewPw(){
    document.getElementById("pw").value = web3.sha3(document.getElementById("pw").value);
    document.getElementById("pw2").value = web3.sha3(document.getElementById("pw2").value);
  }

