<?php

namespace Aesislabs\BexioConnector\Tests;

use DateTime;
use Aesislabs\BexioConnector\BexioConnector;
use Aesislabs\BexioConnector\Container\Accounting\Account;
use Aesislabs\BexioConnector\Container\Accounting\AccountGroup;
use Aesislabs\BexioConnector\Container\Accounting\BusinessYear;
use Aesislabs\BexioConnector\Container\Accounting\CalendarYear;
use Aesislabs\BexioConnector\Container\Accounting\Currency;
use Aesislabs\BexioConnector\Container\Accounting\ExchangeRate;
use Aesislabs\BexioConnector\Container\Accounting\JournalEntry;
use Aesislabs\BexioConnector\Container\Accounting\ManualEntry;
use Aesislabs\BexioConnector\Container\Accounting\ManualEntryFile;
use Aesislabs\BexioConnector\Container\Accounting\ManualEntryFileData;
use Aesislabs\BexioConnector\Container\Accounting\NextReferenceNumber;
use Aesislabs\BexioConnector\Container\Accounting\Tax;
use Aesislabs\BexioConnector\Container\Accounting\VatPeriod;
use Aesislabs\BexioConnector\Container\Banking\BankAccount;
use Aesislabs\BexioConnector\Container\Banking\BankIBANPayment;
use Aesislabs\BexioConnector\Container\Banking\BankISPayment;
use Aesislabs\BexioConnector\Container\Banking\BankISRPayment;
use Aesislabs\BexioConnector\Container\Banking\BankPayment;
use Aesislabs\BexioConnector\Container\Contacts\AdditionalAddress;
use Aesislabs\BexioConnector\Container\Contacts\Contact;
use Aesislabs\BexioConnector\Container\Contacts\ContactGroup;
use Aesislabs\BexioConnector\Container\Contacts\ContactRelation;
use Aesislabs\BexioConnector\Container\Contacts\ContactSector;
use Aesislabs\BexioConnector\Container\Contacts\Salutation;
use Aesislabs\BexioConnector\Container\Contacts\Title;
use Aesislabs\BexioConnector\Container\Items\Item;
use Aesislabs\BexioConnector\Container\Items\StockArea;
use Aesislabs\BexioConnector\Container\Items\StockLocation;
use Aesislabs\BexioConnector\Container\Other\Company;
use Aesislabs\BexioConnector\Container\Other\Country;
use Aesislabs\BexioConnector\Container\Other\FictionalUser;
use Aesislabs\BexioConnector\Container\Other\Language;
use Aesislabs\BexioConnector\Container\Other\Note;
use Aesislabs\BexioConnector\Container\Other\PaymentType;
use Aesislabs\BexioConnector\Container\Other\Permissions;
use Aesislabs\BexioConnector\Container\Other\Task;
use Aesislabs\BexioConnector\Container\Other\TaskPriority;
use Aesislabs\BexioConnector\Container\Other\TaskStatus;
use Aesislabs\BexioConnector\Container\Other\Unit;
use Aesislabs\BexioConnector\Container\Other\User;
use Aesislabs\BexioConnector\Container\Projects\BusinessActivity;
use Aesislabs\BexioConnector\Container\Projects\CommunicationType;
use Aesislabs\BexioConnector\Container\Projects\Project;
use Aesislabs\BexioConnector\Container\Projects\ProjectStatus;
use Aesislabs\BexioConnector\Container\Projects\ProjectType;
use Aesislabs\BexioConnector\Container\Projects\Timesheet;
use Aesislabs\BexioConnector\Container\Sales\Comment;
use Aesislabs\BexioConnector\Container\Sales\DefaultPosition;
use Aesislabs\BexioConnector\Container\Sales\Delivery;
use Aesislabs\BexioConnector\Container\Sales\DiscountPosition;
use Aesislabs\BexioConnector\Container\Sales\DocumentSetting;
use Aesislabs\BexioConnector\Container\Sales\File;
use Aesislabs\BexioConnector\Container\Sales\Invoice;
use Aesislabs\BexioConnector\Container\Projects\TimesheetStatus;
use Aesislabs\BexioConnector\Container\Sales\InvoicePayment;
use Aesislabs\BexioConnector\Container\Sales\InvoiceReminder;
use Aesislabs\BexioConnector\Container\Sales\ItemPosition;
use Aesislabs\BexioConnector\Container\Sales\Order;
use Aesislabs\BexioConnector\Container\Sales\OrderRepetition;
use Aesislabs\BexioConnector\Container\Sales\PagebreakPosition;
use Aesislabs\BexioConnector\Container\Sales\Quote;
use Aesislabs\BexioConnector\Container\Sales\SubpositionPosition;
use Aesislabs\BexioConnector\Container\Sales\SubtotalPosition;
use Aesislabs\BexioConnector\Container\Sales\TextPosition;
use Aesislabs\BexioConnector\Container\Success;
use Aesislabs\BexioConnector\RequestBody\Accounting\Accounts\AccountsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\Accounts\AccountsSearchBodyItem;
use Aesislabs\BexioConnector\RequestBody\Accounting\CalendarYears\CalendarYearBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\CalendarYears\CalendarYearsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\Currencies\CurrencyBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\ManualEntries\ManualEntryBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\ManualEntries\ManualEntryFileBody;
use Aesislabs\BexioConnector\RequestBody\Accounting\ManualEntries\ManualEntryItemBody;
use Aesislabs\BexioConnector\RequestBody\Banking\BankPaymentAmount;
use Aesislabs\BexioConnector\RequestBody\Banking\BankPaymentRecipient;
use Aesislabs\BexioConnector\RequestBody\Banking\IBANPayments\IBANPaymentBody;
use Aesislabs\BexioConnector\RequestBody\Banking\ISPayments\ISPaymentBody;
use Aesislabs\BexioConnector\RequestBody\Banking\ISRPayments\ISRPaymentBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Contacts\ContactBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Contacts\ContactArrayBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Contacts\ContactsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Salutations\SalutationBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Salutations\SalutationsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\ContactSectors\ContactSectorsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Titles\TitlesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Contacts\Titles\TitleBody;
use Aesislabs\BexioConnector\RequestBody\Items\Items\ItemBody;
use Aesislabs\BexioConnector\RequestBody\Items\Items\ItemsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Items\StockAreas\StockAreasSearchBody;
use Aesislabs\BexioConnector\RequestBody\Items\StockLocations\StockLocationsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Countries\CountriesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Countries\CountryBody;
use Aesislabs\BexioConnector\RequestBody\Other\Languages\LanguagesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Notes\NoteBody;
use Aesislabs\BexioConnector\RequestBody\Other\Notes\NotesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\PaymentTypes\PaymentTypesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Tasks\TaskBody;
use Aesislabs\BexioConnector\RequestBody\Other\Tasks\TasksSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Units\UnitBody;
use Aesislabs\BexioConnector\RequestBody\Other\Units\UnitsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Other\Users\FictionalUserBody;
use Aesislabs\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivitiesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivityBody;
use Aesislabs\BexioConnector\RequestBody\Projects\CommunicationTypes\CommunicationTypesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Projects\Projects\ProjectBody;
use Aesislabs\BexioConnector\RequestBody\Projects\Projects\ProjectsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Projects\Timesheets\TimesheetBody;
use Aesislabs\BexioConnector\RequestBody\Projects\Timesheets\TimesheetDurationBody;
use Aesislabs\BexioConnector\RequestBody\Projects\Timesheets\TimesheetsSearchBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Comments\CommentBody;
use Aesislabs\BexioConnector\RequestBody\Sales\DefaultPositions\DefaultPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\DiscountPositions\DiscountPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\CopyInvoiceBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\InvoicePaymentBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\InvoiceRemindersSearchBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\SendInvoiceBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Invoices\SendInvoiceReminderBody;
use Aesislabs\BexioConnector\RequestBody\Sales\ItemPositions\ItemPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Orders\OrderBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Orders\OrderRepetitionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Orders\OrdersSearchBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Orders\PositionsArrayBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Orders\RepetitionYearly;
use Aesislabs\BexioConnector\RequestBody\Sales\PagebreakPositions\PagebreakPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Quotes\CopyQuoteBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Quotes\QuoteBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Quotes\QuotesSearchBody;
use Aesislabs\BexioConnector\RequestBody\Sales\Quotes\SendQuoteBody;
use Aesislabs\BexioConnector\RequestBody\Sales\SubpositionPositions\SubpositionPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\SubtotalPositions\SubtotalPositionBody;
use Aesislabs\BexioConnector\RequestBody\Sales\TextPositions\TextPositionBody;
use Aesislabs\BexioConnector\RequestQuery\Accounting\AccountGroupsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\AccountsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\BusinessYearsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\CalendarYearsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\CurrenciesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\JournalEntriesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\ManualEntriesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\ManualEntryFilesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\TaxesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Accounting\VatPeriodsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Banking\BankAccountsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Banking\BankPaymentsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\AdditionalAddressesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\ContactGroupsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\ContactRelationsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\ContactSectorsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\ContactsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\SalutationsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Contacts\TitlesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Items\ItemsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Items\StockAreasRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Items\StockLocationsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\CountriesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\FictionalUsersRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\LanguagesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\NotesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\PaymentTypesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\TaskPrioritiesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\TasksRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\TaskStatusesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\UnitsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Other\UsersRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\BusinessActivitiesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\CommunicationTypesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\ProjectsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\ProjectStatusesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\ProjectTypesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\TimesheetsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Projects\TimesheetStatusRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\RequestQueryInterface;
use Aesislabs\BexioConnector\RequestQuery\Sales\CommentsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\DefaultPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\DeliveriesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\DiscountPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\DocumentSettingsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\InvoicePaymentsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\InvoicesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\ItemPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\OrdersRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\PagebreakPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\QuotesRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\SubpositionPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\SubtotalPositionsRequestQuery;
use Aesislabs\BexioConnector\RequestQuery\Sales\TextPositionsRequestQuery;
use Aesislabs\BexioConnector\Response\ErrorResponse;
use Aesislabs\BexioConnector\Response\SuccessResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use PHPUnit\Framework\TestCase;

class BexioConnectorTest extends TestCase
{
    protected const REQUEST_PARAM_INT = 1;
    protected const REQUEST_PARAM_STRING = 'string';
    protected const RESPONSE_STATUS = 200;
    protected const ERROR_MESSAGE = 'Error message';

    public function testAccount()
    {
        $responseBodyClass = Account::class;

        $query = new AccountsRequestQuery();
        $query
            ->setLimit(1)
            ->setOffset(1)
        ;

        $searchBody = new AccountsSearchBody();
        /** @var AccountsSearchBodyItem $item */
        $item = $searchBody->createItem();
        $item
            ->setField($item::SEARCH_FIELD_ACCOUNT_NO)
            ->setCriteria($item::SEARCH_CRITERIA_LIKE)
            ->setValue(1)
        ;

        $this->runListRequest('getAccountsList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchAccounts', $responseBodyClass, [self::REQUEST_PARAM_INT, $searchBody], $query);
    }

    public function testAccountGroup()
    {
        $responseBodyClass = AccountGroup::class;
        $query = new AccountGroupsRequestQuery();

        $this->runListRequest('getAccountGroupsList', $responseBodyClass, [], $query);
    }

    public function testCalendarYear()
    {
        $responseBodyClass = CalendarYear::class;
        $query = new CalendarYearsRequestQuery();
        $body = new CalendarYearBody();
        $searchBody = new CalendarYearsSearchBody();

        $this->runListRequest('getCalendarYearsList', $responseBodyClass, [], $query);
        $this->runRequest('postCalendarYear', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchCalendarYears', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getCalendarYear', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testBusinessYear()
    {
        $responseBodyClass = BusinessYear::class;
        $query = new BusinessYearsRequestQuery();

        $this->runListRequest('getBusinessYearsList', $responseBodyClass, [], $query);
        $this->runRequest('getBusinessYear', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testCurrency()
    {
        $responseBodyClass = Currency::class;
        $query = new CurrenciesRequestQuery();
        $body = new CurrencyBody();

        $this->runListRequest('getCurrenciesList', $responseBodyClass, [], $query);
        $this->runRequest('postCurrency', $responseBodyClass, [$body]);
        $this->runRequest('getCurrency', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putCurrency', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteCurrency', Success::class, [self::REQUEST_PARAM_INT]);

        $responseBodyClass = ExchangeRate::class;
        $this->runListRequest('getListExchangeRates', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
    }

    public function testManualEntry()
    {
        $responseBodyClass = ManualEntry::class;
        $query = new ManualEntriesRequestQuery();
        $body = new ManualEntryBody();
        $body->setEntries([
            new ManualEntryItemBody(),
        ]);

        $this->runListRequest('getManualEntriesList', $responseBodyClass, [], $query);
        $this->runRequest('postManualEntry', $responseBodyClass, [$body]);

        $responseBodyClass = NextReferenceNumber::class;
        $this->runRequest('getNextReferenceNumber', $responseBodyClass, []);

        $responseBodyClass = ManualEntryFile::class;
        $query = new ManualEntryFilesRequestQuery();
        $body = new ManualEntryFileBody();

        $this->runListRequest('getManualEntryFilesList', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT], $query);
        $this->runRequest('postManualEntryFile', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);

        $responseBodyClass = ManualEntryFileData::class;
        $parameters = [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT];
        $this->runRequest('getManualEntryFile', $responseBodyClass, $parameters);
        $this->runRequest('deleteManualEntryFile', Success::class, $parameters);
    }

    public function testJournalEntry()
    {
        $responseBodyClass = JournalEntry::class;
        $query = new JournalEntriesRequestQuery();

        $this->runListRequest('getJournalEntriesList', $responseBodyClass, [], $query);
    }

    public function testTax()
    {
        $responseBodyClass = Tax::class;
        $query = new TaxesRequestQuery();

        $this->runListRequest('getTaxesList', $responseBodyClass, [], $query);
        $this->runRequest('getTax', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('deleteTax', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testVatPeriod()
    {
        $responseBodyClass = VatPeriod::class;
        $query = new VatPeriodsRequestQuery();

        $this->runListRequest('getVatPeriodsList', $responseBodyClass, [], $query);
        $this->runRequest('getVatPeriod', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testBankAccount()
    {
        $responseBodyClass = BankAccount::class;
        $query = new BankAccountsRequestQuery();

        $this->runListRequest('getBankAccountsList', $responseBodyClass, [], $query);
        $this->runRequest('getBankAccount', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testBankPayment()
    {
        $responseBodyClass = BankPayment::class;
        $query = new BankPaymentsRequestQuery();

        $this->runListRequest('getBankPaymentsList', $responseBodyClass, [], $query);
        $this->runRequest('deleteBankPayment', Success::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postCancelBankPayment', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testBankIBANPayments()
    {
        $responseBodyClass = BankIBANPayment::class;
        $body = new IBANPaymentBody();
        $body->setInstructedAmount(new BankPaymentAmount)
            ->setRecipient(new BankPaymentRecipient())
        ;

        $this->runRequest('postIBANPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $this->runRequest('getIBANPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
        $this->runRequest('getIBANPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING]);

        $this->runRequest('patchIBANPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('patchIBANPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING, $body]);
    }

    public function testBankISPayments()
    {
        $responseBodyClass = BankISPayment::class;
        $body = new ISPaymentBody();
        $body->setInstructedAmount(new BankPaymentAmount)
            ->setRecipient(new BankPaymentRecipient())
        ;

        $this->runRequest('postISPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $this->runRequest('getISPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
        $this->runRequest('getISPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING]);

        $this->runRequest('patchISPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('patchISPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING, $body]);
    }

    public function testBankISRPayments()
    {
        $responseBodyClass = BankISRPayment::class;
        $body = new ISRPaymentBody();
        $body->setInstructedAmount(new BankPaymentAmount)
            ->setRecipient(new BankPaymentRecipient())
        ;

        $this->runRequest('postISRPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $this->runRequest('getISRPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
        $this->runRequest('getISRPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING]);

        $this->runRequest('patchISRPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('patchISRPayment', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_STRING, $body]);
    }

    public function testAdditionalAddress()
    {
        $responseBodyClass = AdditionalAddress::class;
        $query = new AdditionalAddressesRequestQuery();
        $query->setOrderBy([
            $query::ORDER_BY_ID,
            $query::ORDER_BY_NAME => $query::SORT_ORDER_DESC,
        ]);
        $body = new AdditionalAddressBody();
        $searchBody = new AdditionalAddressesSearchBody();

        $this->runListRequest('getAdditionalAddressesList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runRequest('postAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runListRequest('postSearchAdditionalAddresses', $responseBodyClass, [self::REQUEST_PARAM_INT, $searchBody], $query);
        $this->runRequest('getAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
        $this->runRequest('putAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteAdditionalAddress', Success::class, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
    }

    public function testContactGroup()
    {
        $responseBodyClass = ContactGroup::class;
        $query = new ContactGroupsRequestQuery();
        $body = new ContactGroupBody();
        $searchBody = new ContactGroupsSearchBody();

        $this->runListRequest('getContactGroupsList', $responseBodyClass, [], $query);
        $this->runRequest('postContactGroup', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContactGroups', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContactGroup', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContactGroup', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContactGroup', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testContactRelation()
    {
        $responseBodyClass = ContactRelation::class;
        $query = new ContactRelationsRequestQuery();
        $body = new ContactRelationBody();
        $searchBody = new ContactRelationsSearchBody();

        $this->runListRequest('getContactRelationsList', $responseBodyClass, [], $query);
        $this->runRequest('postContactRelation', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContactRelations', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContactRelation', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContactRelation', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContactRelation', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testContactSector()
    {
        $responseBodyClass = ContactSector::class;
        $query = new ContactSectorsRequestQuery();
        $body = new ContactSectorsSearchBody();

        $this->runListRequest('getContactSectorsList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchContactSectors', $responseBodyClass, [$body], $query);
    }

    public function testContact()
    {
        $responseBodyClass = Contact::class;
        $query = new ContactsRequestQuery();
        $body = new ContactBody();
        $searchBody = new ContactsSearchBody();
        $arrayBody = new ContactArrayBody();
        $item = $arrayBody->createItem();
        $item->setContactTypeId($item::CONTACT_TYPE_COMPANY);

        $this->runListRequest('getContactsList', $responseBodyClass, [], $query);
        $this->runRequest('postContact', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContacts', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContact', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContact', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContact', Success::class, [self::REQUEST_PARAM_INT]);
        $this->runListRequest('postContactsBulk', $responseBodyClass, [$arrayBody]);
    }

    public function testSalutation()
    {
        $responseBodyClass = Salutation::class;
        $query = new SalutationsRequestQuery();
        $body = new SalutationBody();
        $searchBody = new SalutationsSearchBody();

        $this->runListRequest('getSalutationsList', $responseBodyClass, [], $query);
        $this->runRequest('postSalutation', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchSalutations', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getSalutation', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putSalutation', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteSalutation', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testTitle()
    {
        $responseBodyClass = Title::class;
        $query = new TitlesRequestQuery();
        $body = new TitleBody();
        $searchBody = new TitlesSearchBody();

        $this->runListRequest('getTitlesList', $responseBodyClass, [], $query);
        $this->runRequest('postTitle', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTitles', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTitle', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTitle', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTitle', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testProject()
    {
        $responseBodyClass = Project::class;
        $query = new ProjectsRequestQuery();
        $body = new ProjectBody();
        $searchBody = new ProjectsSearchBody();

        $this->runListRequest('getProjectsList', $responseBodyClass, [], $query);
        $this->runRequest('postProject', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchProjects', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getProject', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putProject', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $successBodyClass = Success::class;
        $this->runRequest('deleteProject', $successBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postArchiveProject', $successBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postUnarchiveProject', $successBodyClass, [self::REQUEST_PARAM_INT]);

        $responseBodyClass = ProjectStatus::class;
        $query = new ProjectStatusesRequestQuery();
        $this->runListRequest('getProjectStatusesList', $responseBodyClass, [], $query);

        $responseBodyClass = ProjectType::class;
        $query = new ProjectTypesRequestQuery();
        $this->runListRequest('getProjectTypesList', $responseBodyClass, [], $query);
    }

    public function testTimesheet()
    {
        $responseBodyClass = Timesheet::class;
        $query = new TimesheetsRequestQuery();
        $body = new TimesheetBody();
        $body->setText('text');
        $body->setTracking(
            (new TimesheetDurationBody())
                ->setDate(new DateTime('2019-05-20'))
                ->setDuration('01:40')
        );
        $searchBody = new TimesheetsSearchBody();

        $this->runListRequest('getTimesheetsList', $responseBodyClass, [], $query);
        $this->runRequest('postTimesheet', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTimesheets', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTimesheet', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTimesheet', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTimesheet', Success::class, [self::REQUEST_PARAM_INT]);

        $query = new TimesheetStatusRequestQuery();
        $this->runListRequest('getTimesheetStatusList', TimesheetStatus::class, [], $query);
    }

    public function testBusinessActivity()
    {
        $responseBodyClass = BusinessActivity::class;
        $query = new BusinessActivitiesRequestQuery();
        $body = new BusinessActivityBody();
        $searchBody = new BusinessActivitiesSearchBody();

        $this->runListRequest('getBusinessActivitiesList', $responseBodyClass, [], $query);
        $this->runRequest('postBusinessActivity', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchBusinessActivities', $responseBodyClass, [$searchBody], $query);
    }

    public function testCommunicationType()
    {
        $responseBodyClass = CommunicationType::class;
        $query = new CommunicationTypesRequestQuery();
        $searchBody = new CommunicationTypesSearchBody();

        $this->runListRequest('getCommunicationTypesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchCommunicationTypes', $responseBodyClass, [$searchBody], $query);
    }

    public function testItem()
    {
        $responseBodyClass = Item::class;
        $query = new ItemsRequestQuery();
        $body = new ItemBody();
        $searchBody = new ItemsSearchBody();

        $this->runListRequest('getItemsList', $responseBodyClass, [], $query);
        $this->runRequest('postItem', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchItems', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getItem', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putItem', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteItem', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testStockLocation()
    {
        $responseBodyClass = StockLocation::class;
        $query = new StockLocationsRequestQuery();
        $searchBody = new StockLocationsSearchBody();

        $this->runListRequest('getStockLocationsList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchStockLocations', $responseBodyClass, [$searchBody], $query);
    }

    public function testStockArea()
    {
        $responseBodyClass = StockArea::class;
        $query = new StockAreasRequestQuery();
        $searchBody = new StockAreasSearchBody();

        $this->runListRequest('getStockAreasList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchStockAreas', $responseBodyClass, [$searchBody], $query);
    }

    public function testCompany()
    {
        $responseBodyClass = Company::class;

        $this->runListRequest('getCompaniesList', $responseBodyClass);
        $this->runRequest('getCompany', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testCountry()
    {
        $responseBodyClass = Country::class;
        $query = new CountriesRequestQuery();
        $body = new CountryBody();
        $searchBody = new CountriesSearchBody();

        $this->runListRequest('getCountriesList', $responseBodyClass, [], $query);
        $this->runRequest('postCountry', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchCountries', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getCountry', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putCountry', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteCountry', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testLanguage()
    {
        $responseBodyClass = Language::class;
        $query = new LanguagesRequestQuery();
        $searchBody = new LanguagesSearchBody();

        $this->runListRequest('getLanguagesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchLanguages', $responseBodyClass, [$searchBody], $query);
    }

    public function testNote()
    {
        $responseBodyClass = Note::class;
        $query = new NotesRequestQuery();
        $body = new NoteBody();
        $searchBody = new NotesSearchBody();

        $this->runListRequest('getNotesList', $responseBodyClass, [], $query);
        $this->runRequest('postNote', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchNotes', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getNote', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putNote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteNote', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testPaymentType()
    {
        $responseBodyClass = PaymentType::class;
        $query = new PaymentTypesRequestQuery();
        $searchBody = new PaymentTypesSearchBody();

        $this->runListRequest('getPaymentTypesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchPaymentTypes', $responseBodyClass, [$searchBody], $query);
    }

    public function testPermissions()
    {
        $responseBodyClass = Permissions::class;

        $this->runRequest('getPermissions', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testTask()
    {
        $responseBodyClass = Task::class;
        $query = new TasksRequestQuery();
        $body = new TaskBody();
        $searchBody = new TasksSearchBody();

        $this->runListRequest('getTasksList', $responseBodyClass, [], $query);
        $this->runRequest('postTask', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTasks', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTask', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTask', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTask', Success::class, [self::REQUEST_PARAM_INT]);

        $query = new TaskPrioritiesRequestQuery();
        $this->runListRequest('getTaskPrioritiesList', TaskPriority::class, [], $query);

        $query = new TaskStatusesRequestQuery();
        $this->runListRequest('getTaskStatusesList', TaskStatus::class, [], $query);
    }

    public function testUnit()
    {
        $responseBodyClass = Unit::class;
        $query = new UnitsRequestQuery();
        $body = new UnitBody();
        $searchBody = new UnitsSearchBody();

        $this->runListRequest('getUnitsList', $responseBodyClass, [], $query);
        $this->runRequest('postUnit', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchUnits', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getUnit', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putUnit', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteUnit', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testUser()
    {
        $responseBodyClass = User::class;
        $query = new UsersRequestQuery();

        $this->runListRequest('getUsersList', $responseBodyClass, [], $query);
        $this->runRequest('getUser', $responseBodyClass, [self::REQUEST_PARAM_INT]);

        $responseBodyClass = FictionalUser::class;
        $query = new FictionalUsersRequestQuery();
        $body = new FictionalUserBody();

        $this->runListRequest('getFictionalUsersList', $responseBodyClass, [], $query);
        $this->runRequest('postFictionalUser', $responseBodyClass, [$body]);
        $this->runRequest('getFictionalUser', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('patchFictionalUser', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteFictionalUser', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testDefaultPosition()
    {
        $responseBodyClass = DefaultPosition::class;
        $query = new DefaultPositionsRequestQuery();
        $body = new DefaultPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getDefaultPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteDefaultPosition', Success::class, $parameters);
    }

    public function testItemPosition()
    {
        $responseBodyClass = ItemPosition::class;
        $query = new ItemPositionsRequestQuery();
        $body = new ItemPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getItemPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteItemPosition', Success::class, $parameters);
    }

    public function testTextPosition()
    {
        $responseBodyClass = TextPosition::class;
        $query = new TextPositionsRequestQuery();
        $body = new TextPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getTextPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteTextPosition', Success::class, $parameters);
    }

    public function testSubtotalPosition()
    {
        $responseBodyClass = SubtotalPosition::class;
        $query = new SubtotalPositionsRequestQuery();
        $body = new SubtotalPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getSubtotalPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteSubtotalPosition', Success::class, $parameters);
    }

    public function testDiscountPosition()
    {
        $responseBodyClass = DiscountPosition::class;
        $query = new DiscountPositionsRequestQuery();
        $body = new DiscountPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getDiscountPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteDiscountPosition', Success::class, $parameters);
    }

    public function testPagebreakPosition()
    {
        $responseBodyClass = PagebreakPosition::class;
        $query = new PagebreakPositionsRequestQuery();
        $body = new PagebreakPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getPagebreakPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deletePagebreakPosition', Success::class, $parameters);
    }

    public function testSubpositionPosition()
    {
        $responseBodyClass = SubpositionPosition::class;
        $query = new SubpositionPositionsRequestQuery();
        $body = new SubpositionPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getSubpositionPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteSubpositionPosition', Success::class, $parameters);
    }

    public function testDocumentSetting()
    {
        $responseBodyClass = DocumentSetting::class;
        $query = new DocumentSettingsRequestQuery();

        $this->runListRequest('getDocumentSettingsList', $responseBodyClass, [], $query);
    }

    public function testComment()
    {
        $responseBodyClass = Comment::class;
        $query = new CommentsRequestQuery();
        $body = new CommentBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getCommentsList', $responseBodyClass, $parameters, $query);

        $this->runListRequest('getOfferCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runListRequest('getOrderCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runListRequest('getInvoiceCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postComment', $responseBodyClass, $parameters);

        $this->runRequest('postOfferComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postOrderComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postInvoiceComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getComment', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getOfferComment', $responseBodyClass, $parameters);
        $this->runRequest('getInvoiceComment', $responseBodyClass, $parameters);
        $this->runRequest('getOrderComment', $responseBodyClass, $parameters);
    }

    public function testQuote()
    {
        $responseBodyClass = Quote::class;
        $responseBodySuccessClass = Success::class;
        $query = new QuotesRequestQuery();
        $body = new QuoteBody();
        $searchBody = new QuotesSearchBody();

        $this->runListRequest('getQuotesList', $responseBodyClass, [], $query);
        $this->runRequest('postQuote', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchQuotes', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getQuote', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getQuotePdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putQuote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postRevertIssueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postAcceptQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postDeclineQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postReissueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postMarkAsSentQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new CopyQuoteBody();
        $this->runRequest('postCopyQuote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new SendQuoteBody();
        $this->runRequest('postSendQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new PositionsArrayBody();
        $item = $body->createItem();
        $item->setId(self::REQUEST_PARAM_INT)
            ->setAmount(self::REQUEST_PARAM_INT)
            ->setType($item::POSITION_TYPE_ARTICLE)
        ;
        $this->runRequest('postCreateOrderFromQuote', Order::class, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postCreateInvoiceFromQuote', Invoice::class, [self::REQUEST_PARAM_INT, $body]);
    }

    public function testOrder()
    {
        $responseBodyClass = Order::class;
        $responseBodySuccessClass = Success::class;
        $query = new OrdersRequestQuery();
        $body = new OrderBody();
        $searchBody = new OrdersSearchBody();

        $this->runListRequest('getOrdersList', $responseBodyClass, [], $query);
        $this->runRequest('postOrder', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchOrders', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getOrder', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getOrderPdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putOrder', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteOrder', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new PositionsArrayBody();
        $item = $body->createItem();
        $item->setId(self::REQUEST_PARAM_INT)
            ->setAmount(self::REQUEST_PARAM_INT)
            ->setType($item::POSITION_TYPE_ARTICLE)
        ;
        $this->runRequest('postCreateDeliveryFromOrder', Delivery::class, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postCreateInvoiceFromOrder', Invoice::class, [self::REQUEST_PARAM_INT, $body]);

        $responseBodyClass = OrderRepetition::class;
        $body = new OrderRepetitionBody();
        $body
            ->setStart(new DateTime('2019-01-01'))
            ->setEnd(new DateTime('2019-12-31'))
            ->setRepetition((new RepetitionYearly())->setInterval(1))
        ;
        $this->runRequest('getOrderRepetition', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postOrderRepetition', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteOrderRepetition', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
    }

    public function testDelivery()
    {
        $responseBodyClass = Delivery::class;
        $query = new DeliveriesRequestQuery();

        $this->runListRequest('getDeliveriesList', $responseBodyClass, [], $query);
        $this->runRequest('getDelivery', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueDelivery', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testInvoice()
    {
        $responseBodyClass = Invoice::class;
        $responseBodySuccessClass = Success::class;
        $query = new InvoicesRequestQuery();
        $body = new InvoiceBody();
        $searchBody = new InvoicesSearchBody();

        $this->runListRequest('getInvoicesList', $responseBodyClass, [], $query);
        $this->runRequest('postInvoice', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchInvoices', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getInvoicePdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postRevertIssueInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postCancelInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postMarkAsSentInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new CopyInvoiceBody();
        $this->runRequest('postCopyInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new SendInvoiceBody();
        $this->runRequest('postSendInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT, $body]);

        $responseBodyClass = InvoicePayment::class;
        $query = new InvoicePaymentsRequestQuery();
        $body = new InvoicePaymentBody();
        $this->runListRequest('getInvoicePaymentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runRequest('postInvoicePayment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getInvoicePayment', $responseBodyClass, $parameters);
        $this->runRequest('deleteInvoicePayment', $responseBodySuccessClass, $parameters);

        $responseBodyClass = InvoiceReminder::class;
        $searchBody = new InvoiceRemindersSearchBody();
        $this->runListRequest('getInvoiceRemindersList', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postInvoiceReminder', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runListRequest('postSearchInvoiceReminders', $responseBodyClass, [self::REQUEST_PARAM_INT, $searchBody]);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getInvoiceReminder', $responseBodyClass, $parameters);
        $this->runRequest('deleteInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('postMarkAsSentInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('postMarkAsUnsentInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('getInvoiceReminderPdf', File::class, $parameters);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            new SendInvoiceReminderBody(),
        ];
        $this->runRequest('postSendInvoiceReminder', $responseBodySuccessClass, $parameters);
    }

    protected function getConnector(array $responses = []): BexioConnector
    {
        $connector = new BexioConnector();
        $connector->setClient($this->getClient($responses));

        return $connector;
    }

    protected function getClient(array $responses = []): Client
    {
        if (empty($responses)) {
            $responses = [
                new Response(200, [], '[{}]'),
                new RequestException(self::ERROR_MESSAGE, new Request('GET', 'test'))
            ];
        }
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }

    protected function getArrayBodyResponse(?int $status = null): Response
    {
        if (!isset($status)) {
            $status = self::RESPONSE_STATUS;
        }

        return new Response($status, [], '[{}]');
    }

    protected function getObjectBodyResponse(?int $status = null): Response
    {
        if (!isset($status)) {
            $status = self::RESPONSE_STATUS;
        }

        return new Response($status, [], '{}');
    }

    protected function getRequestExceptionResponse(?string $message = null): RequestException
    {
        if (!isset($message)) {
            $message = self::ERROR_MESSAGE;
        }

        return new RequestException($message, new Request('GET', 'test'));
    }

    /**
     * @param string $testedMethod
     * @param string $responseBodyClass
     * @param array $parameters
     * @param RequestQueryInterface|null $query
     */
    protected function runListRequest(
        string $testedMethod,
        string $responseBodyClass,
        array $parameters = [],
        ?RequestQueryInterface $query = null
    ): void {
        $connector = $this->getConnector([
            $this->getArrayBodyResponse(),
            $this->getRequestExceptionResponse(),
        ]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertTrue($response->isSuccessResponse());
        $this->assertInstanceOf(SuccessResponse::class, $response);
        $body = $response->getBody();
        $this->assertTrue(is_array($body));
        $this->assertInstanceOf($responseBodyClass, $body[0]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertFalse($response->isSuccessResponse());
        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals(self::ERROR_MESSAGE, $response->getMessage());

        if (isset($query)) {
            $connector = $this->getConnector([
                $this->getArrayBodyResponse(),
            ]);

            $response = $connector->$testedMethod(...array_merge($parameters, [$query]));
            $this->assertTrue($response->isSuccessResponse());
        }
    }

    /**
     * @param string $testedMethod
     * @param string $responseBodyClass
     * @param array $parameters
     */
    protected function runRequest(string $testedMethod, string $responseBodyClass, array $parameters = []): void
    {
        $connector = $this->getConnector([
            $this->getObjectBodyResponse(),
            $this->getRequestExceptionResponse(),
        ]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertTrue($response->isSuccessResponse());
        $this->assertInstanceOf(SuccessResponse::class, $response);
        $body = $response->getBody();
        $this->assertInstanceOf($responseBodyClass, $body);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertFalse($response->isSuccessResponse());
        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals(self::ERROR_MESSAGE, $response->getMessage());
    }
}
