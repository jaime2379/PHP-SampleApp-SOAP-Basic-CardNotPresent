<?php
/* Copyright (c) 2013 EVO Payments International - All Rights Reserved.
 *
* This software and documentation is subject to and made
* available only pursuant to the terms of an executed license
* agreement, and may be used only in accordance with the terms
* of said agreement. This software may not, in whole or in part,
* be copied, photocopied, reproduced, translated, or reduced to
* any electronic medium or machine-readable form without
* prior consent, in writing, from EVO Payments International
*
* Use, duplication or disclosure by the U.S. Government is subject
* to restrictions set forth in an executed license agreement
* and in subparagraph (c)(1) of the Commercial Computer
* Software-Restricted Rights Clause at FAR 52.227-19; subparagraph
* (c)(1)(ii) of the Rights in Technical Data and Computer Software
* clause at DFARS 252.227-7013, subparagraph (d) of the Commercial
* Computer Software--Licensing clause at NASA FAR supplement
* 16-52.227-86; or their equivalent.
*
* Information in this software is subject to change without notice
* and does not represent a commitment on the part of EVO Payments International.
*
* Sample Code is for reference Only and is intended to be used for educational purposes. It's the responsibility of
* the software company to properly integrate into thier solution code that best meets thier production needs.
*/

class Settings
{
	const Timezone = 'America/Denver'; // To get a list of supported timezones see http://php.net/manual/en/timezones.php
	const MsgFormat = 'SOAP'; 
	/*
	 * Identity Token : Identity tokens are signed authentication tokens provided to merchants or other transaction originators to prevent the unauthorized use
	 * of an application. Identity tokens are set to expire after 3 years, and therefore will require renewal. Identity tokens should be managed and protected in a
	 * manner consistent with current key management best practices which may include access control, encryption, or use of specialized security devices. Identity
	 * token owners are responsible for establishing practices for managing sensitive data like any other secure credential or business certificate.
	 *
	 */
	const IdentityToken = 'PHNhbWw6QXNzZXJ0aW9uIE1ham9yVmVyc2lvbj0iMSIgTWlub3JWZXJzaW9uPSIxIiBBc3NlcnRpb25JRD0iXzI4NGE0NzcwLTU2OTEtNGY0My1iZGNlLWYzMzZmNWU0NDdiOCIgSXNzdWVyPSJJcGNBdXRoZW50aWNhdGlvbiIgSXNzdWVJbnN0YW50PSIyMDEzLTEyLTEzVDIxOjMyOjI5LjYyOFoiIHhtbG5zOnNhbWw9InVybjpvYXNpczpuYW1lczp0YzpTQU1MOjEuMDphc3NlcnRpb24iPg0KCTxzYW1sOkNvbmRpdGlvbnMgTm90QmVmb3JlPSIyMDEzLTEyLTEzVDIxOjMyOjI5LjYyOFoiIE5vdE9uT3JBZnRlcj0iMjAxNi0xMi0xM1QyMTozMjoyOS42MjhaIi8+DQoJPHNhbWw6QWR2aWNlLz4NCgk8c2FtbDpBdHRyaWJ1dGVTdGF0ZW1lbnQ+DQoJCTxzYW1sOlN1YmplY3Q+DQoJCQk8c2FtbDpOYW1lSWRlbnRpZmllcj5BRUYyMDUxMjBFNTAwMDAxPC9zYW1sOk5hbWVJZGVudGlmaWVyPg0KCQk8L3NhbWw6U3ViamVjdD4NCgkJPHNhbWw6QXR0cmlidXRlIEF0dHJpYnV0ZU5hbWU9IlNBSyIgQXR0cmlidXRlTmFtZXNwYWNlPSJodHRwOi8vc2NoZW1hcy5pcGNvbW1lcmNlLmNvbS9JZGVudGl0eSI+DQoJCQk8c2FtbDpBdHRyaWJ1dGVWYWx1ZT5BRUYyMDUxMjBFNTAwMDAxPC9zYW1sOkF0dHJpYnV0ZVZhbHVlPg0KCQk8L3NhbWw6QXR0cmlidXRlPg0KCQk8c2FtbDpBdHRyaWJ1dGUgQXR0cmlidXRlTmFtZT0iU2VyaWFsIiBBdHRyaWJ1dGVOYW1lc3BhY2U9Imh0dHA6Ly9zY2hlbWFzLmlwY29tbWVyY2UuY29tL0lkZW50aXR5Ij4NCgkJCTxzYW1sOkF0dHJpYnV0ZVZhbHVlPjYxZmY0MDcyLWJhZjEtNDE5NS04NzNlLTA5ZjRmNzc2ZDcyZjwvc2FtbDpBdHRyaWJ1dGVWYWx1ZT4NCgkJPC9zYW1sOkF0dHJpYnV0ZT4NCgkJPHNhbWw6QXR0cmlidXRlIEF0dHJpYnV0ZU5hbWU9Im5hbWUiIEF0dHJpYnV0ZU5hbWVzcGFjZT0iaHR0cDovL3NjaGVtYXMueG1sc29hcC5vcmcvd3MvMjAwNS8wNS9pZGVudGl0eS9jbGFpbXMiPg0KCQkJPHNhbWw6QXR0cmlidXRlVmFsdWU+QUVGMjA1MTIwRTUwMDAwMTwvc2FtbDpBdHRyaWJ1dGVWYWx1ZT4NCgkJPC9zYW1sOkF0dHJpYnV0ZT4NCgk8L3NhbWw6QXR0cmlidXRlU3RhdGVtZW50Pg0KCTxTaWduYXR1cmUgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvMDkveG1sZHNpZyMiPg0KCQk8U2lnbmVkSW5mbz4NCgkJCTxDYW5vbmljYWxpemF0aW9uTWV0aG9kIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMS8xMC94bWwtZXhjLWMxNG4jIi8+DQoJCQk8U2lnbmF0dXJlTWV0aG9kIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI3JzYS1zaGExIi8+DQoJCQk8UmVmZXJlbmNlIFVSST0iI18yODRhNDc3MC01NjkxLTRmNDMtYmRjZS1mMzM2ZjVlNDQ3YjgiPg0KCQkJCTxUcmFuc2Zvcm1zPg0KCQkJCQk8VHJhbnNmb3JtIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI2VudmVsb3BlZC1zaWduYXR1cmUiLz4NCgkJCQkJPFRyYW5zZm9ybSBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvMTAveG1sLWV4Yy1jMTRuIyIvPg0KCQkJCTwvVHJhbnNmb3Jtcz4NCgkJCQk8RGlnZXN0TWV0aG9kIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI3NoYTEiLz4NCgkJCQk8RGlnZXN0VmFsdWU+WW9qT0xhQkpFSlBZSHpvbXFRUEtYRi9FYWlnPTwvRGlnZXN0VmFsdWU+DQoJCQk8L1JlZmVyZW5jZT4NCgkJPC9TaWduZWRJbmZvPg0KCQk8U2lnbmF0dXJlVmFsdWU+cVpOUVNtZE1sbnBBMEJYT0NmUDNPd0h2UWlZaDZUWXlWWVN6V2o2U1NYb0U2dGRTeTc0SVJjSzEySmkzd29KTEppMEh6ZUQ1MWRQVjVzcjYyU0krdHJhUEdCOHFLRi9neWxHNnlZZ0d6bU5QbnhodmhUT1krVXREWVdUWGpXZ1JVWmNUOStIc0w2aHNGYTErUlBrOWFoOWdyWHhKK1lJMXdHVVhUSWk5RUJIWDQ5VnBtRXh3aU5ZUURTN3JXM1FnRkdUQVFKN0M3RDVQOGVvMVJxWUtZWFJLZ3IyOXFMa1NVdU40SkJxc1JGMkxwR29mdTgxd0ZuZU1tcEVUOFdhc21QalY3NlhZdTZlVTI1K1dhYmFPWisxajB4RnlYbTYzc01Kb2hueUNmYWxla0FkM0JSSlFjWWRDSXRsQ21kVFJ3S0FoTFBUME9qUVdFRVpsL01VNTVRPT08L1NpZ25hdHVyZVZhbHVlPg0KCQk8S2V5SW5mbz4NCgkJCTxvOlNlY3VyaXR5VG9rZW5SZWZlcmVuY2UgeG1sbnM6bz0iaHR0cDovL2RvY3Mub2FzaXMtb3Blbi5vcmcvd3NzLzIwMDQvMDEvb2FzaXMtMjAwNDAxLXdzcy13c3NlY3VyaXR5LXNlY2V4dC0xLjAueHNkIj4NCgkJCQk8bzpLZXlJZGVudGlmaWVyIFZhbHVlVHlwZT0iaHR0cDovL2RvY3Mub2FzaXMtb3Blbi5vcmcvd3NzL29hc2lzLXdzcy1zb2FwLW1lc3NhZ2Utc2VjdXJpdHktMS4xI1RodW1icHJpbnRTSEExIj5iQkcwU0cvd2RCNWJ4eVpyYjEvbTVLakhLMU09PC9vOktleUlkZW50aWZpZXI+DQoJCQk8L286U2VjdXJpdHlUb2tlblJlZmVyZW5jZT4NCgkJPC9LZXlJbmZvPg0KCTwvU2lnbmF0dXJlPg0KPC9zYW1sOkFzc2VydGlvbj4=';
	// encryption key value
	const key = '1234567890123456ABCDEFGHIJKLMNOP'; // Used for Salt for encryption and decryption.  You should generate your Salt and not use the default key provided
	const ActivationKey = '';
	// Application Data Values 
	const ApplicationName = 'My Test App';
	const SoftwareVersion = 'v1.0';
	const SoftwareVersionDate = '2014-06-25';
	const DeviceSerialNumber = '1264682310';
	const ApplicationAttended = true;		// Valid Values 'true', 'false' 
	const ApplicationLocation = 'OffPremises';		// Valid Values 'Unknown', 'OnPremises', 'OffPremises', 'HomeInternet' 
	const PINCapability = 'PINSupported';		// Valid Values 'PINNotSupported', 'PINPadInoperative', 'PINSupported', 'PINVerifiedByDevice', 'Unknown' 
	const ReadCapability = 'HasMSR';		// Common Value Used 'HasMSR', 'KeyOnly' 
	const PTLSSocketId = 'MIIFCzCCA/OgAwIBAgICAoAwDQYJKoZIhvcNAQEFBQAwgbExNDAyBgNVBAMTK0lQIFBheW1lbnRzIEZyYW1ld29yayBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkxCzAJBgNVBAYTAlVTMREwDwYDVQQIEwhDb2xvcmFkbzEPMA0GA1UEBxMGRGVudmVyMRowGAYDVQQKExFJUCBDb21tZXJjZSwgSW5jLjEsMCoGCSqGSIb3DQEJARYdYWRtaW5AaXBwYXltZW50c2ZyYW1ld29yay5jb20wHhcNMTMwODIzMTg1NjA5WhcNMjMwODIxMTg1NjA5WjCBjDELMAkGA1UEBhMCVVMxETAPBgNVBAgTCENvbG9yYWRvMQ8wDQYDVQQHEwZEZW52ZXIxGjAYBgNVBAoTEUlQIENvbW1lcmNlLCBJbmMuMT0wOwYDVQQDEzRxYmtXM25TZ0FJQUFBUDhBSCtDY0FBQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUE9MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx68dD32BLjiDC9RdkIFY2P8N/bzvV75qWWemh0hO3zswggMY6BtKM7xVAoeVbEUP/HxOSlBasKE4tY/Y9hfDoqaszojt5BfqGYqAnUZ/7yjlfROdDu5q1p7AJ8DsEg9o5rpp0/88tj1+XK43JpE0PHtRecCdpsiKGclAdvaGRiXVMR0U6/nNjoNdptSo3Kd8DXSU4xWfiwrVWYUMu9otetiwutJNB3jUfsW5incr1OZ7vkFa58Eltb57UygQ5i31FSrVuBfS4UMQKVBP1V7wsVQlcC+QBNjlsGiATzdqtJBgcaI+BkPEJkF7kpDae3fNbQ77AhVFsoGV30bZCSoSNwIDAQABo4IBTjCCAUowCQYDVR0TBAIwADAdBgNVHQ4EFgQU2t+wf1VVGvks5M1zZlNa92YYUAEwgeYGA1UdIwSB3jCB24AU3+ASnJQimuunAZqQDgNcnO2HuHShgbekgbQwgbExNDAyBgNVBAMTK0lQIFBheW1lbnRzIEZyYW1ld29yayBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkxCzAJBgNVBAYTAlVTMREwDwYDVQQIEwhDb2xvcmFkbzEPMA0GA1UEBxMGRGVudmVyMRowGAYDVQQKExFJUCBDb21tZXJjZSwgSW5jLjEsMCoGCSqGSIb3DQEJARYdYWRtaW5AaXBwYXltZW50c2ZyYW1ld29yay5jb22CCQD/yDY5hYVsVzA1BgNVHR8ELjAsMCqgKKAmhiRodHRwOi8vY3JsLmlwY29tbWVyY2UuY29tL2NhLWNybC5jcmwwDQYJKoZIhvcNAQEFBQADggEBAIGOvmbUPdUs3FMbQ95rpT7hShEkAbRnQjp8yY1ql48obQM0mTjQ4CfAXPELZ1xe8KyC4jaurW9KMuCkApwC8b8cgdKWg1ujtKkrNGhhDQRLcclNB6q5JTXrP0gQgrr43yHxh4vaAA8GTvkg7j2hrTUkksmc7JNIto0XsHlfvrUv8XCQIeQsFyy/nLHpQIkXwvAS6fcml6KMRTgQJm2yLZCfYVs6n18VDd9LCYWO9Y6majWoqgyHZ5Gy2qT7V+YxgDMUrZa7Fd66xHTWskO8wc7kuW5ZKaB29ewbAXIY31AHi4dAuGS6znPxnRg1kE01aDQ1FFCcajKtovg3di8PICU=';
	const EncryptionType = 'MagneSafeV4V5Compatible'; // Valid Values 'IPADV1Compatible', 'MagneSafeV4V5Compatible', 'NotSet'
	
	// MerchantProfile Values 
	const IndustryType = 'Ecommerce';		// Valid Values 'Ecommerce', 'MOTO', 'Retail', 'Restaurant' 
	const CustomerPresent = 'Ecommerce';		// Common Values Used [Ecommerce : Ecommerce] [MOTO : MOTO] [Retail/Restaurant : Present] 
	const RequestACI = 'IsCPSMeritCapable';		// In general default to 'IsCPSMeritCapable'. Other value is 'NotCPSMeritCapable' 
 	const EntryMode = 'Keyed'; //Valid Values [Ecommerce/MOTO : Keyed] [Retail/Restaurant : Keyed/TrackDataFromMSR] 
	
	// TransactionData Values 
	const TxnData_ProcessAsKeyed = true;		// 'true', 'false' Depending on industrytype toggle between a swipe example and a keyed transaction
	const TxnData_EntryMode = 'Keyed';		// [Ecommerce/MOTO : Keyed] [Retail/Restaurant : Keyed/TrackDataFromMSR] 
	const TxnData_OrderOfProcessingTracks = 'Track2|Track1|Keyed';		// The order consists of three values seperated by Pipe. Ex. Track2|Track1|Keyed 
	const TxnData_ProcessMagensaTxn = false; // Magensa is an End to End encryptions solution offered through MagTek	
	const TxnData_IndustryType = 'Ecommerce';		// Valid Values 'Ecommerce', 'MOTO', 'Retail', 'Restaurant' 
	const TxnData_CustomerPresent = 'Ecommerce';		// [Ecommerce : Ecommerce] [MOTO : MOTO] [Retail/Restaurant : Present] 
	const TxnData_UserId = 'UTest';				// Some services require a UserId and Password
	const TxnData_Password = 'UPassword';		// Some services require a UserId and Password
	// ** ALL THE FOLOWING WERE IN SINGLE QUOTES IN HTTP
	const TxnData_SignatureCaptured = false;		// 'true', 'false' - For retail/restaurant should be configurable in their software and should be marked whether or not software actually gets the signature for each transaction 
	const TxnData_IncludeAVS = true;		// 'true', 'false' 
	const TxnData_IntlAVSOverride = false;	// 'true', 'false' - Merchant must work with Evo to enable this
	const TxnData_IncludeCV = true;			// 'true', 'false' 
	const TxnData_IncludeVPAS = false;		// 'true', 'false' 
	const TxnData_IncludeUCAF = false;		// 'true', 'false' 
	const TxnData_IncludeCFees = false;		// 'true', 'false'
	const TxnData_SoftDescriptors = false;		// 'true', 'false'
	const TxnData_BillingShipping = false;
	// Support Tokenization
	const TxnData_SupportTokenization = true; // 'true', 'false'
	const TxnData_ProcessEncrypted = false;
	// Process as a BankcardTransaction object or as an International AVS transaction
	const ProcessInternationalTxn = true;	
	
	// Process as a BankcardTransaction object or as a BankcardTransactionPro object
	const ProcessAsBankcardTransaction_Pro = true;		// 'true', 'false' If set to true the following Pro parameters are required
	// THE FOLLOWING WAS 'true' NOT LEVEL1 IN HTTP
	const Pro_PurchaseCardLevel = Level1;		// 'Level1', 'Level2', 'Level3' 
	const Pro_InterchangeData = false;		// 'true', 'false'
	const Pro_IncludeLevel2OrLevel3Data = true;		// 'true', 'false'
	const Pro_IncludeAlternativeMerchantData = 'false';		// 'true', 'false'
	
	/// ACH Transaction Data Values
	const TxnData_SECCode = 'WEB'; //  WEB,PPD,CCD,BOC,TEL The three letter code that indicates what NACHA regulations the transaction must adhere to. Required.
	const TxnData_ServiceType = 'ACH';   //Indicates the Electronic Checking service type: ACH, RDC or ECK. Required.
	
	// Endpoint Management
	const BaseSvcEndpointPrimary = 'https://api.cipcert.goevo.com/2.0.20/SvcInfo';
	const BaseSvcEndpointSecondary = 'https://api.cipcert.goevo.com/2.0.20/SvcInfo';
	const BaseTxnEndpointPrimary = 'https://api.cipcert.goevo.com/2.0.20/Txn';
	const BaseTxnEndpointSecondary = 'https://api.cipcert.goevo.com/2.0.20/Txn';
	const BaseDataServicesEndpointPrimary = 'https://api.cipcert.goevo.com/2.0.20/DataServices/TMS';
	const BaseDataServicesEndpointSecondary = 'https://api.cipcert.goevo.com/2.0.20/DataServices/TMS';
	const URL_BaseURL = 'https://api.cipcert.goevo.com/2.0.20/';
	const URL_RestURL = 'https://api.cipcert.goevo.com/REST/2.0.20/';
}
?>