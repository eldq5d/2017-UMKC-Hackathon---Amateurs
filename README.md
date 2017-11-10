# 2017-UMKC-Hackathon---Amateurs

<strong>Use case id:</strong> 4-PR-ArgumentWriter

<strong>Title:</strong> Assurance Argument Writer for HLC Accreditation Reaffirmation by UMKC Provost's Office

<strong>Team:</strong> The Amateurs

<strog>Members:</strong>
Liye Zhu,
Yachen Zhao,
Yuxi Mao,
Emma Davis

<strong>Problem to be solved:</strong>

UMKC need a tool that will manage the 1,500+ documents collected and used to support the university’s Higher Learning Commission Accreditation Reaffirmation process. Help us keep UMKC accredited!

<strong>Application Specifications:</strong>

There are two main interactions for the tool.

<strong>Document Submission:</strong>

A form that will allow UMKC committee members to submit documents. It should be able to handle different types of documents, such as text, doc, pdf, image, and spreadsheet. UMKC committee members should also be able to provide descriptive information that includes department, document name, document year, HLC category, justification, and submitter.

Upon submission, the tool will do the following:

a. Programmatically rename the file to department_documentname_year.

b. Save the file to the appropriate HLC category.

c. Generate a unique doc # and log it and the form metadata into an accessible table.

d. Organize the documents based on different categories such as submitter, academic unit or department, HLC category, type of document, etc.

<strong>Document Retrieval:</strong>

Provide an interface for UMKC committee members to search for or browse submitted documents.

a. Allow members to browse all documents by the department, HLC category, etc.

b. Provide a search box to allow members to search for documents by keywords in the department or document name. Ideally also provide full-text document searching.

c. Members would be able to access and open the file within the browse/search results.

<strong>Document taxonomies:</strong>

The tool will need to control values for department and HLC category and related assumed practices. Admins will need to be able to maintain value lists for those fields. Bonus points for analytics functionality (# documents by department, category, and year).
