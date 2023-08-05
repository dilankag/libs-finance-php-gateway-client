<?php

/**
 * @author Dilanka Gamage
 */
class PeopleProfile {

    private $peopleId;
    private $salutation;
    private $name;
    private $lastname;
    private $email;
    private $address;
    private $permAddress;
    private $paypalAccount;
    private $password;
    private $hashedPassword;
    private $passwordHashedBc;
    private $orgPassword;
    private $username;
    private $location;
    private $photo;
    private $deviceId;
    private $deviceToken;
    private $deviceType;
    private $pushVersion;
    private $deviceImei;
    private $createdDate;
    private $updatedDate;
    private $lastLogin;
    private $loginIp;
    private $loginCity;
    private $loginState;
    private $loginCountry;
    private $loginType;
    private $loginStatus;
    private $loginFrom;
    private $userType;
    private $accountType;
    private $timezone;
    private $description;
    private $phone;
    private $reachableMobile;
    private $secondaryMobile;
    private $emegencyMobile;
    private $gender;
    private $dob;
    private $status;
    private $blockReason;
    private $userCreatedby;
    private $companyId;
    private $driverLicenseId;
    private $profilePicture;
    private $availabilityStatus;
    private $accountBalance;
    private $bookingLimit;
    private $driverShare;
    private $notificationSetting;
    private $otp;
    private $driverReferralCode;
    private $notificationStatus;
    private $userUpdatedby;
    private $reachableMobileBak;
    private $onDemand;
    private $driverTripSummaries;

    function getPeopleId() {
        return $this->peopleId;
    }

    function getSalutation() {
        return $this->salutation;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress() {
        return $this->address;
    }

    function getPermAddress() {
        return $this->permAddress;
    }

    function getPaypalAccount() {
        return $this->paypalAccount;
    }

    function getPassword() {
        return $this->password;
    }

    function getHashedPassword() {
        return $this->hashedPassword;
    }

    function getPasswordHashedBc() {
        return $this->passwordHashedBc;
    }

    function getOrgPassword() {
        return $this->orgPassword;
    }

    function getUsername() {
        return $this->username;
    }

    function getLocation() {
        return $this->location;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getDeviceId() {
        return $this->deviceId;
    }

    function getDeviceToken() {
        return $this->deviceToken;
    }

    function getDeviceType() {
        return $this->deviceType;
    }

    function getPushVersion() {
        return $this->pushVersion;
    }

    function getDeviceImei() {
        return $this->deviceImei;
    }

    function getCreatedDate() {
        return $this->createdDate;
    }

    function getUpdatedDate() {
        return $this->updatedDate;
    }

    function getLastLogin() {
        return $this->lastLogin;
    }

    function getLoginIp() {
        return $this->loginIp;
    }

    function getLoginCity() {
        return $this->loginCity;
    }

    function getLoginState() {
        return $this->loginState;
    }

    function getLoginCountry() {
        return $this->loginCountry;
    }

    function getLoginType() {
        return $this->loginType;
    }

    function getLoginStatus() {
        return $this->loginStatus;
    }

    function getLoginFrom() {
        return $this->loginFrom;
    }

    function getUserType() {
        return $this->userType;
    }

    function getAccountType() {
        return $this->accountType;
    }

    function getTimezone() {
        return $this->timezone;
    }

    function getDescription() {
        return $this->description;
    }

    function getPhone() {
        return $this->phone;
    }

    function getReachableMobile() {
        return $this->reachableMobile;
    }

    function getSecondaryMobile() {
        return $this->secondaryMobile;
    }

    function getEmegencyMobile() {
        return $this->emegencyMobile;
    }

    function getGender() {
        return $this->gender;
    }

    function getDob() {
        return $this->dob;
    }

    function getStatus() {
        return $this->status;
    }

    function getBlockReason() {
        return $this->blockReason;
    }

    function getUserCreatedby() {
        return $this->userCreatedby;
    }

    function getCompanyId() {
        return $this->companyId;
    }

    function getDriverLicenseId() {
        return $this->driverLicenseId;
    }

    function getProfilePicture() {
        return $this->profilePicture;
    }

    function getAvailabilityStatus() {
        return $this->availabilityStatus;
    }

    function getAccountBalance() {
        return $this->accountBalance;
    }

    function getBookingLimit() {
        return $this->bookingLimit;
    }

    function getDriverShare() {
        return $this->driverShare;
    }

    function getNotificationSetting() {
        return $this->notificationSetting;
    }

    function getOtp() {
        return $this->otp;
    }

    function getDriverReferralCode() {
        return $this->driverReferralCode;
    }

    function getNotificationStatus() {
        return $this->notificationStatus;
    }

    function getUserUpdatedby() {
        return $this->userUpdatedby;
    }

    function getReachableMobileBak() {
        return $this->reachableMobileBak;
    }

    function getOnDemand() {
        return $this->onDemand;
    }

    function getDriverTripSummaries() {
        return $this->driverTripSummaries;
    }

    function setPeopleId($peopleId) {
        $this->peopleId = $peopleId;
    }

    function setSalutation($salutation) {
        $this->salutation = $salutation;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPermAddress($permAddress) {
        $this->permAddress = $permAddress;
    }

    function setPaypalAccount($paypalAccount) {
        $this->paypalAccount = $paypalAccount;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setHashedPassword($hashedPassword) {
        $this->hashedPassword = $hashedPassword;
    }

    function setPasswordHashedBc($passwordHashedBc) {
        $this->passwordHashedBc = $passwordHashedBc;
    }

    function setOrgPassword($orgPassword) {
        $this->orgPassword = $orgPassword;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

    function setDeviceToken($deviceToken) {
        $this->deviceToken = $deviceToken;
    }

    function setDeviceType($deviceType) {
        $this->deviceType = $deviceType;
    }

    function setPushVersion($pushVersion) {
        $this->pushVersion = $pushVersion;
    }

    function setDeviceImei($deviceImei) {
        $this->deviceImei = $deviceImei;
    }

    function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;
    }

    function setUpdatedDate($updatedDate) {
        $this->updatedDate = $updatedDate;
    }

    function setLastLogin($lastLogin) {
        $this->lastLogin = $lastLogin;
    }

    function setLoginIp($loginIp) {
        $this->loginIp = $loginIp;
    }

    function setLoginCity($loginCity) {
        $this->loginCity = $loginCity;
    }

    function setLoginState($loginState) {
        $this->loginState = $loginState;
    }

    function setLoginCountry($loginCountry) {
        $this->loginCountry = $loginCountry;
    }

    function setLoginType($loginType) {
        $this->loginType = $loginType;
    }

    function setLoginStatus($loginStatus) {
        $this->loginStatus = $loginStatus;
    }

    function setLoginFrom($loginFrom) {
        $this->loginFrom = $loginFrom;
    }

    function setUserType($userType) {
        $this->userType = $userType;
    }

    function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

    function setTimezone($timezone) {
        $this->timezone = $timezone;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setReachableMobile($reachableMobile) {
        $this->reachableMobile = $reachableMobile;
    }

    function setSecondaryMobile($secondaryMobile) {
        $this->secondaryMobile = $secondaryMobile;
    }

    function setEmegencyMobile($emegencyMobile) {
        $this->emegencyMobile = $emegencyMobile;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setDob($dob) {
        $this->dob = $dob;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setBlockReason($blockReason) {
        $this->blockReason = $blockReason;
    }

    function setUserCreatedby($userCreatedby) {
        $this->userCreatedby = $userCreatedby;
    }

    function setCompanyId($companyId) {
        $this->companyId = $companyId;
    }

    function setDriverLicenseId($driverLicenseId) {
        $this->driverLicenseId = $driverLicenseId;
    }

    function setProfilePicture($profilePicture) {
        $this->profilePicture = $profilePicture;
    }

    function setAvailabilityStatus($availabilityStatus) {
        $this->availabilityStatus = $availabilityStatus;
    }

    function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
    }

    function setBookingLimit($bookingLimit) {
        $this->bookingLimit = $bookingLimit;
    }

    function setDriverShare($driverShare) {
        $this->driverShare = $driverShare;
    }

    function setNotificationSetting($notificationSetting) {
        $this->notificationSetting = $notificationSetting;
    }

    function setOtp($otp) {
        $this->otp = $otp;
    }

    function setDriverReferralCode($driverReferralCode) {
        $this->driverReferralCode = $driverReferralCode;
    }

    function setNotificationStatus($notificationStatus) {
        $this->notificationStatus = $notificationStatus;
    }

    function setUserUpdatedby($userUpdatedby) {
        $this->userUpdatedby = $userUpdatedby;
    }

    function setReachableMobileBak($reachableMobileBak) {
        $this->reachableMobileBak = $reachableMobileBak;
    }

    function setOnDemand($onDemand) {
        $this->onDemand = $onDemand;
    }

    function setDriverTripSummaries($driverTripSummaries) {
        $this->driverTripSummaries = $driverTripSummaries;
    }

    public function __toString() {
        return 'PeopleProfile[peopleId=' . $this->peopleId .
                ', driverTripSummaries=(' . $this->driverTripSummaries . ')]';
    }

}
