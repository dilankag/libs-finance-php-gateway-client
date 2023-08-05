<?php

/**
 * @author Dilanka Gamage
 */
abstract class BaseJsonHelper implements IJsonHelper {

    protected function makePeopleProfile($someProfile) {
        $peopleProfile = new PeopleProfile();
        $peopleProfile->setPeopleId(isset($someProfile["peopleId"]) ? $someProfile["peopleId"] : NULL);
        $peopleProfile->setPeopleId(isset($someProfile["peopleId"]) ? $someProfile["peopleId"] : NULL);
        $peopleProfile->setSalutation(isset($someProfile["salutation"]) ? $someProfile["salutation"] : NULL);
        $peopleProfile->setName(isset($someProfile["name"]) ? $someProfile["name"] : NULL);
        $peopleProfile->setLastname(isset($someProfile["lastname"]) ? $someProfile["lastname"] : NULL);
        $peopleProfile->setEmail(isset($someProfile["email"]) ? $someProfile["email"] : NULL);
        $peopleProfile->setAddress(isset($someProfile["address"]) ? $someProfile["address"] : NULL);
        $peopleProfile->setPermAddress(isset($someProfile["permAddress"]) ? $someProfile["permAddress"] : NULL);
        $peopleProfile->setPaypalAccount(isset($someProfile["paypalAccount"]) ? $someProfile["paypalAccount"] : NULL);
        $peopleProfile->setPassword(isset($someProfile["password"]) ? $someProfile["password"] : NULL);
        $peopleProfile->setHashedPassword(isset($someProfile["hashedPassword"]) ? $someProfile["hashedPassword"] : NULL);
        $peopleProfile->setPasswordHashedBc(isset($someProfile["passwordHashedBc"]) ? $someProfile["passwordHashedBc"] : NULL);
        $peopleProfile->setOrgPassword(isset($someProfile["orgPassword"]) ? $someProfile["orgPassword"] : NULL);
        $peopleProfile->setUsername(isset($someProfile["username"]) ? $someProfile["username"] : NULL);
        $peopleProfile->setLocation(isset($someProfile["location"]) ? $someProfile["location"] : NULL);
        $peopleProfile->setPhoto(isset($someProfile["photo"]) ? $someProfile["photo"] : NULL);
        $peopleProfile->setDeviceId(isset($someProfile["deviceId"]) ? $someProfile["deviceId"] : NULL);
        $peopleProfile->setDeviceToken(isset($someProfile["deviceToken"]) ? $someProfile["deviceToken"] : NULL);
        $peopleProfile->setDeviceType(isset($someProfile["deviceType"]) ? $someProfile["deviceType"] : NULL);
        $peopleProfile->setPushVersion(isset($someProfile["pushVersion"]) ? $someProfile["pushVersion"] : NULL);
        $peopleProfile->setDeviceImei(isset($someProfile["deviceImei"]) ? $someProfile["deviceImei"] : NULL);
        $peopleProfile->setCreatedDate(isset($someProfile["createdDate"]) ? $someProfile["createdDate"] : NULL);
        $peopleProfile->setUpdatedDate(isset($someProfile["updatedDate"]) ? $someProfile["updatedDate"] : NULL);
        $peopleProfile->setLastLogin(isset($someProfile["lastLogin"]) ? $someProfile["lastLogin"] : NULL);
        $peopleProfile->setLoginIp(isset($someProfile["loginIp"]) ? $someProfile["loginIp"] : NULL);
        $peopleProfile->setLoginCity(isset($someProfile["loginCity"]) ? $someProfile["loginCity"] : NULL);
        $peopleProfile->setLoginState(isset($someProfile["loginState"]) ? $someProfile["loginState"] : NULL);
        $peopleProfile->setLoginCountry(isset($someProfile["loginCountry"]) ? $someProfile["loginCountry"] : NULL);
        $peopleProfile->setLoginType(isset($someProfile["loginType"]) ? $someProfile["loginType"] : NULL);
        $peopleProfile->setLoginStatus(isset($someProfile["loginStatus"]) ? $someProfile["loginStatus"] : NULL);
        $peopleProfile->setLoginFrom(isset($someProfile["loginFrom"]) ? $someProfile["loginFrom"] : NULL);
        $peopleProfile->setUserType(isset($someProfile["userType"]) ? $someProfile["userType"] : NULL);
        $peopleProfile->setAccountType(isset($someProfile["accountType"]) ? $someProfile["accountType"] : NULL);
        $peopleProfile->setTimezone(isset($someProfile["timezone"]) ? $someProfile["timezone"] : NULL);
        $peopleProfile->setDescription(isset($someProfile["description"]) ? $someProfile["description"] : NULL);
        $peopleProfile->setPhone(isset($someProfile["phone"]) ? $someProfile["phone"] : NULL);
        $peopleProfile->setReachableMobile(isset($someProfile["reachableMobile"]) ? $someProfile["reachableMobile"] : NULL);
        $peopleProfile->setSecondaryMobile(isset($someProfile["secondaryMobile"]) ? $someProfile["secondaryMobile"] : NULL);
        $peopleProfile->setEmegencyMobile(isset($someProfile["emegencyMobile"]) ? $someProfile["emegencyMobile"] : NULL);
        $peopleProfile->setGender(isset($someProfile["gender"]) ? $someProfile["gender"] : NULL);
        $peopleProfile->setDob(isset($someProfile["dob"]) ? $someProfile["dob"] : NULL);
        $peopleProfile->setStatus(isset($someProfile["status"]) ? $someProfile["status"] : NULL);
        $peopleProfile->setBlockReason(isset($someProfile["blockReason"]) ? $someProfile["blockReason"] : NULL);
        $peopleProfile->setUserCreatedby(isset($someProfile["userCreatedby"]) ? $someProfile["userCreatedby"] : NULL);
        $peopleProfile->setCompanyId(isset($someProfile["companyId"]) ? $someProfile["companyId"] : NULL);
        $peopleProfile->setDriverLicenseId(isset($someProfile["driverLicenseId"]) ? $someProfile["driverLicenseId"] : NULL);
        $peopleProfile->setProfilePicture(isset($someProfile["profilePicture"]) ? $someProfile["profilePicture"] : NULL);
        $peopleProfile->setAvailabilityStatus(isset($someProfile["availabilityStatus"]) ? $someProfile["availabilityStatus"] : NULL);
        $peopleProfile->setAccountBalance(isset($someProfile["accountBalance"]) ? $someProfile["accountBalance"] : NULL);
        $peopleProfile->setBookingLimit(isset($someProfile["bookingLimit"]) ? $someProfile["bookingLimit"] : NULL);
        $peopleProfile->setDriverShare(isset($someProfile["driverShare"]) ? $someProfile["driverShare"] : NULL);
        $peopleProfile->setNotificationSetting(isset($someProfile["notificationSetting"]) ? $someProfile["notificationSetting"] : NULL);
        $peopleProfile->setOtp(isset($someProfile["otp"]) ? $someProfile["otp"] : NULL);
        $peopleProfile->setDriverReferralCode(isset($someProfile["driverReferralCode"]) ? $someProfile["driverReferralCode"] : NULL);
        $peopleProfile->setNotificationStatus(isset($someProfile["notificationStatus"]) ? $someProfile["notificationStatus"] : NULL);
        $peopleProfile->setUserUpdatedby(isset($someProfile["userUpdatedby"]) ? $someProfile["userUpdatedby"] : NULL);
        $peopleProfile->setReachableMobileBak(isset($someProfile["reachableMobileBak"]) ? $someProfile["reachableMobileBak"] : NULL);
        $peopleProfile->setDriverTripSummaries(isset($someProfile["driverTripSummaries"]) ? $someProfile["driverTripSummaries"] : NULL);
        return $peopleProfile;
    }

    protected function makeDriverProfile($someProfile) {
        $driverProfile = new DriverProfile();
        $driverProfile->setDriverId(isset($someProfile["driverId"]) ? $someProfile["driverId"] : NULL);
        $driverProfile->setLatitude(isset($someProfile["latitude"]) ? $someProfile["latitude"] : NULL);
        $driverProfile->setLongitude(isset($someProfile["longitude"]) ? $someProfile["longitude"] : NULL);
        $driverProfile->setStatus(isset($someProfile["status"]) ? $someProfile["status"] : NULL);
        $driverProfile->setCurrentStatus(isset($someProfile["currentStatus"]) ? $someProfile["currentStatus"] : NULL);
        $driverProfile->setShiftStatus(isset($someProfile["shiftStatus"]) ? $someProfile["shiftStatus"] : NULL);
        $driverProfile->setTravelStatus(isset($someProfile["travelStatus"]) ? $someProfile["travelStatus"] : NULL);
        $driverProfile->setDriverApi(isset($someProfile["driverApi"]) ? $someProfile["driverApi"] : NULL);
        $driverProfile->setShiftStartedAt(isset($someProfile["shiftStartedAt"]) ? $someProfile["shiftStartedAt"] : NULL);
        $driverProfile->setUpdateDate(isset($someProfile["updateDate"]) ? $someProfile["updateDate"] : NULL);
        $driverProfile->setCurrentTrip(isset($someProfile["currentTrip"]) ? $someProfile["currentTrip"] : NULL);
        $driverProfile->setTripAssignedAt(isset($someProfile["tripAssignedAt"]) ? $someProfile["tripAssignedAt"] : NULL);
        $driverProfile->setProfileStatus(isset($someProfile["profileStatus"]) ? $someProfile["profileStatus"] : NULL);
        $driverProfile->setVehicleModel(isset($someProfile["vehicleModel"]) ? $someProfile["vehicleModel"] : NULL);
        $driverProfile->setLoginStatus(isset($someProfile["loginStatus"]) ? $someProfile["loginStatus"] : NULL);
        $driverProfile->setDirectionalHireEnable(isset($someProfile["directionalHireEnable"]) ? $someProfile["directionalHireEnable"] : NULL);
        $driverProfile->setBearing(isset($someProfile["bearing"]) ? $someProfile["bearing"] : NULL);
        $driverProfile->setDriverTripSummaries(isset($someProfile["driverTripSummaries"]) ? $someProfile["driverTripSummaries"] : NULL);
        return $driverProfile;
    }

    protected function makeTaxiProfile($someProfile) {
        $taxiProfile = new TaxiProfile();
        $taxiProfile->setTaxiId(isset($someProfile["taxiId"]) ? $someProfile["taxiId"] : NULL);
        $taxiProfile->setTaxiNo(isset($someProfile["taxiNo"]) ? $someProfile["taxiNo"] : NULL);
        $taxiProfile->setTaxiType(isset($someProfile["taxiType"]) ? $someProfile["taxiType"] : NULL);
        $taxiProfile->setTaxiModel(isset($someProfile["taxiModel"]) ? $someProfile["taxiModel"] : NULL);
        $taxiProfile->setTaxiBrandModelId(isset($someProfile["taxiBrandModelId"]) ? $someProfile["taxiBrandModelId"] : NULL);
        $taxiProfile->setTaxiCompany(isset($someProfile["taxiCompany"]) ? $someProfile["taxiCompany"] : NULL);
        $taxiProfile->setTaxiCountry(isset($someProfile["taxiCountry"]) ? $someProfile["taxiCountry"] : NULL);
        $taxiProfile->setTaxiState(isset($someProfile["taxiState"]) ? $someProfile["taxiState"] : NULL);
        $taxiProfile->setTaxiCity(isset($someProfile["taxiCity"]) ? $someProfile["taxiCity"] : NULL);
        $taxiProfile->setTaxiCapacity(isset($someProfile["taxiCapacity"]) ? $someProfile["taxiCapacity"] : NULL);
        $taxiProfile->setTaxiSpeed(isset($someProfile["taxiSpeed"]) ? $someProfile["taxiSpeed"] : NULL);
        $taxiProfile->setMaxLuggage(isset($someProfile["maxLuggage"]) ? $someProfile["maxLuggage"] : NULL);
        $taxiProfile->setTaxiFareKm(isset($someProfile["taxiFareKm"]) ? $someProfile["taxiFareKm"] : NULL);
        $taxiProfile->setTaxiImage(isset($someProfile["taxiImage"]) ? $someProfile["taxiImage"] : NULL);
        $taxiProfile->setTaxiSliderimage(isset($someProfile["taxiSliderimage"]) ? $someProfile["taxiSliderimage"] : NULL);
        $taxiProfile->setTaxiSerializeimage(isset($someProfile["taxiSerializeimage"]) ? $someProfile["taxiSerializeimage"] : NULL);
        $taxiProfile->setTaxiCreatedate(isset($someProfile["taxiCreatedate"]) ? $someProfile["taxiCreatedate"] : NULL);
        $taxiProfile->setTaxiCreatedby(isset($someProfile["taxiCreatedby"]) ? $someProfile["taxiCreatedby"] : NULL);
        $taxiProfile->setTaxiStatus(isset($someProfile["taxiStatus"]) ? $someProfile["taxiStatus"] : NULL);
        $taxiProfile->setTaxiAvailability(isset($someProfile["taxiAvailability"]) ? $someProfile["taxiAvailability"] : NULL);
        return $taxiProfile;
    }

    protected function makeVehicleModelProfile($someProfile) {
        $vehicleModelProfile = new VehicleModelProfile();
        $vehicleModelProfile->setModelId(isset($someProfile["modelId"]) ? $someProfile["modelId"] : NULL);
        $vehicleModelProfile->setName(isset($someProfile["name"]) ? $someProfile["name"] : NULL);
        $vehicleModelProfile->setMotorModelVehicleMakeId(isset($someProfile["motorModelVehicleMakeId"]) ? $someProfile["motorModelVehicleMakeId"] : NULL);
        $vehicleModelProfile->setStatus(isset($someProfile["status"]) ? $someProfile["status"] : NULL);
        return $vehicleModelProfile;
    }

    protected function makeDriverTripTransaction($someTransaction) {
        $driverTripTransaction = new DriverTripTransaction();
        $driverTripTransaction->setTransactionId(isset($someTransaction["transactionId"]) ? $someTransaction["transactionId"] : NULL);
        $driverTripTransaction->setDriverId(isset($someTransaction["driverId"]) ? $someTransaction["driverId"] : NULL);
        $driverTripTransaction->setTripId(isset($someTransaction["tripId"]) ? $someTransaction["tripId"] : NULL);
        $driverTripTransaction->setTransactionType(isset($someTransaction["transactionType"]) ? $someTransaction["transactionType"] : NULL);
        $driverTripTransaction->setTransactionCategory(isset($someTransaction["transactionCategory"]) ? $someTransaction["transactionCategory"] : NULL);
        $driverTripTransaction->setAmountInRupee(isset($someTransaction["amountInRupee"]) ? $someTransaction["amountInRupee"] : NULL);
        $driverTripTransaction->setAmountInCents(isset($someTransaction["amountInCents"]) ? $someTransaction["amountInCents"] : NULL);
        $driverTripTransaction->setDescription(isset($someTransaction["description"]) ? $someTransaction["description"] : NULL);
        $driverTripTransaction->setCreatedTime(isset($someTransaction["createdTime"]) ? $someTransaction["createdTime"] : NULL);
        $driverTripTransaction->setCreatedDate(isset($someTransaction["createdDate"]) ? $someTransaction["createdDate"] : NULL);
        $driverTripTransaction->setCreatedBy(isset($someTransaction["createdBy"]) ? $someTransaction["createdBy"] : NULL);
        if (isset($someTransaction["driverProfile"])) {
            $driverProfile = $this->makeDriverProfile($someTransaction["driverProfile"]);
            $driverTripTransaction->setDriverProfile($driverProfile);
        }
        if (isset($someTransaction["peopleProfile"])) {
            $peopleProfile = $this->makePeopleProfile($someTransaction["peopleProfile"]);
            $driverTripTransaction->setPeopleProfile($peopleProfile);
        }
        return $driverTripTransaction;
    }

    protected function makeDriverTripSummaries($someSummaries) {
        $summaries = array();
        foreach ($someSummaries as $summary) {
            $driverTripSummary = new DriverTripSummary();
            $driverTripSummary->setDriverId(isset($summary["driverId"]) ? $summary["driverId"] : NULL);
            if (isset($summary["driverProfile"])) {
                $driverProfile = $this->makeDriverProfile($summary["driverProfile"]);
                $driverTripSummary->setDriverProfile($driverProfile);
            }
            if (isset($summary["peopleProfile"])) {
                $peopleProfile = $this->makePeopleProfile($summary["peopleProfile"]);
                $driverTripSummary->setPeopleProfile($peopleProfile);
            }
            $driverTripSummary->setTransactionType(isset($summary["transactionType"]) ? $summary["transactionType"] : NULL);
            $driverTripSummary->setTotalAmountInCents(isset($summary["totalAmountInCents"]) ? $summary["totalAmountInCents"] : NULL);
            $driverTripSummary->setRowCount(isset($summary["rowCount"]) ? $summary["rowCount"] : NULL);
            array_push($summaries, $driverTripSummary);
        }
        return $summaries;
    }

    protected function makeTaxiDriverMappings($someMappings) {
        $mappings = array();
        foreach ($someMappings as $mapping) {
            $taxiDriverMapping = new TaxiDriverMapping();
            $taxiDriverMapping->setMappingId(isset($mapping["mappingId"]) ? $mapping["mappingId"] : NULL);
            $taxiDriverMapping->setMappingDriverId(isset($mapping["mappingDriverId"]) ? $mapping["mappingDriverId"] : NULL);
            $taxiDriverMapping->setMappingPaymentPlanId(isset($mapping["mappingPaymentPlanId"]) ? $mapping["mappingPaymentPlanId"] : NULL);
            $taxiDriverMapping->setMappingTaxiId(isset($mapping["mappingTaxiId"]) ? $mapping["mappingTaxiId"] : NULL);
            if (isset($mapping["taxiProfile"])) {
                $taxiProfile = $this->makeTaxiProfile($mapping["taxiProfile"]);
                $taxiDriverMapping->setTaxiProfile($taxiProfile);
            }
            $taxiDriverMapping->setMappingTaxiModelId(isset($mapping["mappingTaxiModelId"]) ? $mapping["mappingTaxiModelId"] : NULL);
            if (isset($mapping["vehicleModelProfile"])) {
                $vehicleModelProfile = $this->makeVehicleModelProfile($mapping["vehicleModelProfile"]);
                $taxiDriverMapping->setVehicleModelProfile($vehicleModelProfile);
            }
            $taxiDriverMapping->setMappingCompanyId(isset($mapping["mappingCompanyId"]) ? $mapping["mappingCompanyId"] : NULL);
            $taxiDriverMapping->setMappingCountryId(isset($mapping["mappingCountryId"]) ? $mapping["mappingCountryId"] : NULL);
            $taxiDriverMapping->setMappingStateId(isset($mapping["mappingStateId"]) ? $mapping["mappingStateId"] : NULL);
            $taxiDriverMapping->setMappingCityId(isset($mapping["mappingCityId"]) ? $mapping["mappingCityId"] : NULL);
            $taxiDriverMapping->setMappingEndDate(isset($mapping["mappingEndDate"]) ? $mapping["mappingEndDate"] : NULL);
            $taxiDriverMapping->setMappingCreatedBy(isset($mapping["mappingCreatedBy"]) ? $mapping["mappingCreatedBy"] : NULL);
            $taxiDriverMapping->setMappingStatus(isset($mapping["mappingStatus"]) ? $mapping["mappingStatus"] : NULL);
            $taxiDriverMapping->setMappingUpdatedBy(isset($mapping["mappingUpdatedBy"]) ? $mapping["mappingUpdatedBy"] : NULL);
            $taxiDriverMapping->setMappingUpdateDate(isset($mapping["mappingUpdateDate"]) ? $mapping["mappingUpdateDate"] : NULL);
            array_push($mappings, $taxiDriverMapping);
        }
        return $mappings;
    }

    protected function makeFglStakeholderMonthlySummary($someSummaries) {
        $summaries = array();
        foreach ($someSummaries as $summary) {
            $fglStakeholderMonthlySummary = new FglStakeholderMonthlySummary();
            $fglStakeholderMonthlySummary->setAccountingPeriod(isset($summary["accountingPeriod"]) ? $summary["accountingPeriod"] : NULL);
            $fglStakeholderMonthlySummary->setAccountId(isset($summary["accountId"]) ? $summary["accountId"] : NULL);
            $fglStakeholderMonthlySummary->setStakeholderType(isset($summary["stakeholderType"]) ? $summary["stakeholderType"] : NULL);
            $fglStakeholderMonthlySummary->setCurrencyType(isset($summary["currencyType"]) ? $summary["currencyType"] : NULL);
            $fglStakeholderMonthlySummary->setAccountType(isset($summary["accountType"]) ? $summary["accountType"] : NULL);
            $fglStakeholderMonthlySummary->setAccountReference(isset($summary["accountReference"]) ? $summary["accountReference"] : NULL);
            $fglStakeholderMonthlySummary->setTotalDebit(isset($summary["totalDebit"]) ? $summary["totalDebit"] : NULL);
            $fglStakeholderMonthlySummary->setDebitCount(isset($summary["debitCount"]) ? $summary["debitCount"] : NULL);
            $fglStakeholderMonthlySummary->setTotalCredit(isset($summary["totalCredit"]) ? $summary["totalCredit"] : NULL);
            $fglStakeholderMonthlySummary->setCreditCount(isset($summary["creditCount"]) ? $summary["creditCount"] : NULL);
            $fglStakeholderMonthlySummary->setAccountBalance(isset($summary["accountBalance"]) ? $summary["accountBalance"] : NULL);
            array_push($summaries, $fglStakeholderMonthlySummary);
        }
        return $summaries;
    }
    
    protected function makeFglStakeholderBalanceSummary($someSummaries) {
        $summaries = array();
        foreach ($someSummaries as $summary) {
            $fglStakeholderBalanceSummary = new FglStakeholderBalanceSummary();
            $fglStakeholderBalanceSummary->setAccountId(isset($summary["accountId"]) ? $summary["accountId"] : NULL);
            $fglStakeholderBalanceSummary->setStakeholderType(isset($summary["stakeholderType"]) ? $summary["stakeholderType"] : NULL);
            $fglStakeholderBalanceSummary->setCurrencyType(isset($summary["currencyType"]) ? $summary["currencyType"] : NULL);
            $fglStakeholderBalanceSummary->setAccountType(isset($summary["accountType"]) ? $summary["accountType"] : NULL);
            $fglStakeholderBalanceSummary->setAccountReference(isset($summary["accountReference"]) ? $summary["accountReference"] : NULL);
            $fglStakeholderBalanceSummary->setAccountBalance(isset($summary["accountBalance"]) ? $summary["accountBalance"] : NULL);
            array_push($summaries, $fglStakeholderBalanceSummary);
        }
        return $summaries;
    }

    protected function makeFglStakeholderTransactionDetail($someTransaction) {
        $fglStakeholderTransactionDetail = new FglStakeholderTransactionDetail();
        $fglStakeholderTransactionDetail->setJournalId(isset($someTransaction["journalId"]) ? $someTransaction["journalId"] : NULL);
        $fglStakeholderTransactionDetail->setJournalEventId(isset($someTransaction["journalEventId"]) ? $someTransaction["journalEventId"] : NULL);
        $fglStakeholderTransactionDetail->setJournalEventLogId(isset($someTransaction["journalEventLogId"]) ? $someTransaction["journalEventLogId"] : NULL);
        $fglStakeholderTransactionDetail->setJournalAccountingRuleId(isset($someTransaction["journalAccountingRuleId"]) ? $someTransaction["journalAccountingRuleId"] : NULL);
        $fglStakeholderTransactionDetail->setJournalReferenceId(isset($someTransaction["journalReferenceId"]) ? $someTransaction["journalReferenceId"] : NULL);
        $fglStakeholderTransactionDetail->setJournalGrossAmount(isset($someTransaction["journalGrossAmount"]) ? $someTransaction["journalGrossAmount"] : NULL);
        $fglStakeholderTransactionDetail->setPostingJournalId(isset($someTransaction["postingJournalId"]) ? $someTransaction["postingJournalId"] : NULL);
        $fglStakeholderTransactionDetail->setPostingAccountingRuleId(isset($someTransaction["postingAccountingRuleId"]) ? $someTransaction["postingAccountingRuleId"] : NULL);
        $fglStakeholderTransactionDetail->setPostingReferenceId(isset($someTransaction["postingReferenceId"]) ? $someTransaction["postingReferenceId"] : NULL);
        $fglStakeholderTransactionDetail->setPostingAccountId(isset($someTransaction["postingAccountId"]) ? $someTransaction["postingAccountId"] : NULL);
        $fglStakeholderTransactionDetail->setPostingAccountingPeriod(isset($someTransaction["postingAccountingPeriod"]) ? $someTransaction["postingAccountingPeriod"] : NULL);
        $fglStakeholderTransactionDetail->setPostingAccountingEntry(isset($someTransaction["postingAccountingEntry"]) ? $someTransaction["postingAccountingEntry"] : NULL);
        $fglStakeholderTransactionDetail->setPostingCurrencyTypeId(isset($someTransaction["postingCurrencyTypeId"]) ? $someTransaction["postingCurrencyTypeId"] : NULL);
        $fglStakeholderTransactionDetail->setPostingAmount(isset($someTransaction["postingAmount"]) ? $someTransaction["postingAmount"] : NULL);
        $fglStakeholderTransactionDetail->setAccountStakeholderId(isset($someTransaction["accountStakeholderId"]) ? $someTransaction["accountStakeholderId"] : NULL);
        $fglStakeholderTransactionDetail->setAccountCurrencyTypeId(isset($someTransaction["accountCurrencyTypeId"]) ? $someTransaction["accountCurrencyTypeId"] : NULL);
        $fglStakeholderTransactionDetail->setAccountTypeId(isset($someTransaction["accountTypeId"]) ? $someTransaction["accountTypeId"] : NULL);
        $fglStakeholderTransactionDetail->setAccountReferenceId(isset($someTransaction["accountReferenceId"]) ? $someTransaction["accountReferenceId"] : NULL);
        $fglStakeholderTransactionDetail->setAccountingRuleId(isset($someTransaction["accountingRuleId"]) ? $someTransaction["accountingRuleId"] : NULL);
        $fglStakeholderTransactionDetail->setAccountingRuleDescription(isset($someTransaction["accountingRuleDescription"]) ? $someTransaction["accountingRuleDescription"] : NULL);
        $fglStakeholderTransactionDetail->setEventId(isset($someTransaction["eventId"]) ? $someTransaction["eventId"] : NULL);
        $fglStakeholderTransactionDetail->setEventReferenceParam(isset($someTransaction["eventReferenceParam"]) ? $someTransaction["eventReferenceParam"] : NULL);
        $fglStakeholderTransactionDetail->setCreatedDate(isset($someTransaction["createdDate"]) ? $someTransaction["createdDate"] : NULL);
        $fglStakeholderTransactionDetail->setModifiedDate(isset($someTransaction["modifiedDate"]) ? $someTransaction["modifiedDate"] : NULL);
        $fglStakeholderTransactionDetail->setCreatedBy(isset($someTransaction["createdBy"]) ? $someTransaction["createdBy"] : NULL);
        $fglStakeholderTransactionDetail->setModifiedBy(isset($someTransaction["modifiedBy"]) ? $someTransaction["modifiedBy"] : NULL);
        $fglStakeholderTransactionDetail->setVersion(isset($someTransaction["version"]) ? $someTransaction["version"] : NULL);
        $fglStakeholderTransactionDetail->setRoutingKey(isset($someTransaction["routingKey"]) ? $someTransaction["routingKey"] : NULL);
        return $fglStakeholderTransactionDetail;
    }

    protected function makeFglAccountingRuleProfile($someProfile) {
        $fglAccountingRuleProfile = new FglAccountingRuleProfile();
        $fglAccountingRuleProfile->setRuleId(isset($someProfile["ruleId"]) ? $someProfile["ruleId"] : NULL);
        $fglAccountingRuleProfile->setEventId(isset($someProfile["eventId"]) ? $someProfile["eventId"] : NULL);
        $fglAccountingRuleProfile->setRelationalLogicId(isset($someProfile["relationalLogicId"]) ? $someProfile["relationalLogicId"] : NULL);
        $fglAccountingRuleProfile->setArithmeticLogicId(isset($someProfile["arithmeticLogicId"]) ? $someProfile["arithmeticLogicId"] : NULL);
        $fglAccountingRuleProfile->setDescription(isset($someProfile["description"]) ? $someProfile["description"] : NULL);
        $fglAccountingRuleProfile->setTransactionCategoryId(isset($someProfile["transactionCategoryId"]) ? $someProfile["transactionCategoryId"] : NULL);
        $fglAccountingRuleProfile->setActive(isset($someProfile["active"]) ? $someProfile["active"] : NULL);
        $fglAccountingRuleProfile->setStartingDate(isset($someProfile["startingDate"]) ? $someProfile["startingDate"] : NULL);
        $fglAccountingRuleProfile->setClosingDate(isset($someProfile["closingDate"]) ? $someProfile["closingDate"] : NULL);
        $fglAccountingRuleProfile->setCreatedDate(isset($someProfile["createdDate"]) ? $someProfile["createdDate"] : NULL);
        $fglAccountingRuleProfile->setModifiedDate(isset($someProfile["modifiedDate"]) ? $someProfile["modifiedDate"] : NULL);
        $fglAccountingRuleProfile->setVersion(isset($someProfile["version"]) ? $someProfile["version"] : NULL);
        $fglAccountingRuleProfile->setRoutingKey(isset($someProfile["routingKey"]) ? $someProfile["routingKey"] : NULL);
        return $fglAccountingRuleProfile;
    }

}
