<?php


/**
 * @fn public S web3_clientVersion()
 * @brief Web3ClientVersion
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#web3_clientversion)
 * @return EthS
 */


/**
 * @fn public D web3_sha3()
 * @brief Web3Sha3
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#web3_sha3)
 * @param EthS
 * @return EthD
 */


/**
 * @fn public S net_version()
 * @brief NetVersion
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_version)
 * @return EthS
 */


/**
 * @fn public Q net_peerCount()
 * @brief NetPeerCount
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_peercount)
 * @return EthQ
 */


/**
 * @fn public B net_listening()
 * @brief NetListening
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_listening)
 * @return EthB
 */


/**
 * @fn public D personal_sign()
 * @brief PersonalSign
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_sign)
 * @param EthD20
 * @param EthD
 * @param EthS
 * @return EthD
 */


/**
 * @fn public D20 personal_ecRecover()
 * @brief PersonalEcRecover
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_ecrecover)
 * @param EthD
 * @param EthD
 * @return EthD20
 */


/**
 * @fn public S eth_protocolVersion()
 * @brief EthProtocolVersion
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_protocolversion)
 * @return EthS
 */


/**
 * @fn public Boolean|EthSyncing eth_syncing()
 * @brief EthSyncing
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_syncing)
 * @return EthB
 */


/**
 * @fn public D20 eth_coinbase()
 * @brief EthCoinbase
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_coinbase)
 * @return EthD20
 */


/**
 * @fn public B eth_mining()
 * @brief EthMining
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_mining)
 * @return EthB
 */


/**
 * @fn public Q eth_hashrate()
 * @brief EthHashrate
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_hashrate)
 * @return EthQ
 */


/**
 * @fn public Q eth_gasPrice()
 * @brief EthGasPrice
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gasprice)
 * @return EthQ
 */


/**
 * @fn public Array eth_accounts()
 * @brief EthAccounts
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_accounts)
 * @return 
 */


/**
 * @fn public Q eth_blockNumber()
 * @brief EthBlockNumber
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_blocknumber)
 * @return EthQ
 */


/**
 * @fn public Q eth_getBalance()
 * @brief EthGetBalance
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getbalance)
 * @param EthD20
 * @param EthBlockParam
 * @return EthQ
 */


/**
 * @fn public D eth_getStorageAt()
 * @brief EthGetStorageAt
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getstorageat)
 * @param EthD20
 * @param EthQ
 * @param EthBlockParam
 * @return EthD
 */


/**
 * @fn public Q eth_getTransactionCount()
 * @brief EthGetTransactionCount
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactioncount)
 * @param EthD20
 * @param EthBlockParam
 * @return EthQ
 */


/**
 * @fn public Q eth_getBlockTransactionCountByHash()
 * @brief EthGetBlockTransactionCountByHash
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblocktransactioncountbyhash)
 * @param EthD32
 * @return EthQ
 */


/**
 * @fn public Q eth_getBlockTransactionCountByNumber()
 * @brief EthGetBlockTransactionCountByNumber
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblocktransactioncountbynumber)
 * @param EthBlockParam
 * @return EthQ
 */


/**
 * @fn public Q eth_getUncleCountByBlockHash()
 * @brief EthGetUncleCountByBlockHash
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclecountbyblockhash)
 * @param EthD32
 * @return EthQ
 */


/**
 * @fn public Q eth_getUncleCountByBlockNumber()
 * @brief EthGetUncleCountByBlockNumber
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclecountbyblocknumber)
 * @param EthQ
 * @return EthQ
 */


/**
 * @fn public D eth_getCode()
 * @brief EthGetCode
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getcode)
 * @param EthD20
 * @param EthBlockParam
 * @return EthD
 */


/**
 * @fn public D eth_sign()
 * @brief EthSign
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sign)
 * @param EthD20
 * @param EthD32
 * @return EthD
 */


/**
 * @fn public D eth_sendTransaction()
 * @brief EthSendTransaction
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sendtransaction)
 * @param SendTransaction
 * @return EthD
 */


/**
 * @fn public D32 eth_sendRawTransaction()
 * @brief EthSendRawTransaction
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sendrawtransaction)
 * @param EthD
 * @return EthD32
 */


/**
 * @fn public D eth_call()
 * @brief EthCall
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_call)
 * @param CallTransaction
 * @param EthBlockParam
 * @return EthD
 */


/**
 * @fn public Q eth_estimateGas()
 * @brief EthEstimateGas
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_estimategas)
 * @param EstimateTransaction
 * @param EthBlockParam
 * @return EthQ
 */


/**
 * @fn public Block eth_getBlockByHash()
 * @brief EthGetBlockByHash
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblockbyhash)
 * @param EthD32
 * @param EthB
 * @return 
 */


/**
 * @fn public Block eth_getBlockByNumber()
 * @brief EthGetBlockByNumber
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblockbynumber)
 * @param EthBlockParam
 * @param EthB
 * @return 
 */


/**
 * @fn public Transaction eth_getTransactionByHash()
 * @brief EthGetTransactionByHash
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyhash)
 * @param EthD32
 * @return 
 */


/**
 * @fn public Transaction eth_getTransactionByBlockHashAndIndex()
 * @brief EthGetTransactionByBlockHashAndIndex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyblockhashandindex)
 * @param EthD32
 * @param EthQ
 * @return 
 */


/**
 * @fn public Transaction eth_getTransactionByBlockNumberAndIndex()
 * @brief EthGetTransactionByBlockNumberAndIndex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyblocknumberandindex)
 * @param EthBlockParam
 * @param EthQ
 * @return 
 */


/**
 * @fn public Receipt eth_getTransactionReceipt()
 * @brief EthGetTransactionReceipt
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionreceipt)
 * @param EthD32
 * @return 
 */


/**
 * @fn public Block eth_getUncleByBlockHashAndIndex()
 * @brief EthGetUncleByBlockHashAndIndex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclebyblockhashandindex)
 * @param EthD32
 * @param EthQ
 * @return 
 */


/**
 * @fn public Block eth_getUncleByBlockNumberAndIndex()
 * @brief EthGetUncleByBlockNumberAndIndex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclebyblocknumberandindex)
 * @param EthBlockParam
 * @param EthQ
 * @return 
 */


/**
 * @fn public Array eth_getCompilers()
 * @brief EthGetCompilers
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getcompilers)
 * @return 
 */


/**
 * @fn public D eth_compileLLL()
 * @brief EthCompileLLL
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compilelll)
 * @param EthS
 * @return EthD
 */


/**
 * @fn public D eth_compileSolidity()
 * @brief EthCompileSolidity
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compilesolidity)
 * @param EthS
 * @return EthD
 */


/**
 * @fn public D eth_compileSerpent()
 * @brief EthCompileSerpent
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compileserpent)
 * @param EthS
 * @return EthD
 */


/**
 * @fn public Q eth_newFilter()
 * @brief EthNewFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newfilter)
 * @param Filter
 * @return EthQ
 */


/**
 * @fn public Q eth_newBlockFilter()
 * @brief EthNewBlockFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newblockfilter)
 * @return EthQ
 */


/**
 * @fn public Q eth_newPendingTransactionFilter()
 * @brief EthNewPendingTransactionFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newpendingtransactionfilter)
 * @return EthQ
 */


/**
 * @fn public B eth_uninstallFilter()
 * @brief EthUninstallFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_uninstallfilter)
 * @param EthQ
 * @return EthB
 */


/**
 * @fn public Array eth_getFilterChanges()
 * @brief EthGetFilterChanges
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getfilterchanges)
 * @param EthQ
 * @return 
 */


/**
 * @fn public Array eth_getFilterLogs()
 * @brief EthGetFilterLogs
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getfilterlogs)
 * @param EthQ
 * @return 
 */


/**
 * @fn public Array eth_getLogs()
 * @brief EthGetLogs
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getlogs)
 * @param Filter
 * @return 
 */


/**
 * @fn public Array eth_getWork()
 * @brief EthGetWork
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getwork)
 * @return 
 */


/**
 * @fn public B eth_submitWork()
 * @brief EthSubmitWork
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_submitwork)
 * @param EthD
 * @param EthD32
 * @param EthD32
 * @return EthB
 */


/**
 * @fn public B eth_submitHashrate()
 * @brief EthSubmitHashrate
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_submithashrate)
 * @param EthD
 * @param EthD
 * @return EthB
 */


/**
 * @fn public B db_putString()
 * @brief DbPutString
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_putstring)
 * @param EthS
 * @param EthS
 * @param EthS
 * @return EthB
 */


/**
 * @fn public S db_getString()
 * @brief DbGetString
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_getstring)
 * @param EthS
 * @param EthS
 * @return EthS
 */


/**
 * @fn public B db_putHex()
 * @brief DbPutHex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_puthex)
 * @param EthS
 * @param EthS
 * @param EthD
 * @return EthB
 */


/**
 * @fn public D db_getHex()
 * @brief DbGetHex
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_gethex)
 * @param EthS
 * @param EthS
 * @return EthD
 */


/**
 * @fn public B shh_post()
 * @brief ShhPost
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_post)
 * @param SHHPost
 * @return EthB
 */


/**
 * @fn public S shh_version()
 * @brief ShhVersion
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_version)
 * @return EthS
 */


/**
 * @fn public D shh_newIdentity()
 * @brief ShhNewIdentity
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newidentity)
 * @return EthD
 */


/**
 * @fn public B shh_hasIdentity()
 * @brief ShhHasIdentity
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_hasidentity)
 * @param EthD
 * @return EthB
 */


/**
 * @fn public D shh_newGroup()
 * @brief ShhNewGroup
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newgroup)
 * @return EthD
 */


/**
 * @fn public B shh_addToGroup()
 * @brief ShhAddToGroup
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_addtogroup)
 * @param EthD
 * @return EthB
 */


/**
 * @fn public Q shh_newFilter()
 * @brief ShhNewFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newfilter)
 * @param SHHFilter
 * @return EthQ
 */


/**
 * @fn public B shh_uninstallFilter()
 * @brief ShhUninstallFilter
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_uninstallfilter)
 * @param EthQ
 * @return EthB
 */


/**
 * @fn public Array shh_getFilterChanges()
 * @brief ShhGetFilterChanges
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_getfilterchanges)
 * @param EthQ
 * @return 
 */


/**
 * @fn public Array shh_getMessages()
 * @brief ShhGetMessages
 * @details See [Ethereum Wiki](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_getmessages)
 * @param EthQ
 * @return 
 */
