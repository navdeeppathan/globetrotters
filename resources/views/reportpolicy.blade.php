@extends('layouts.app')

@section('content')
    <div class="et_pb_text_inner">
        <br />
        <br />

        <h1>Policy Statements & Reports</h1>
        <br />
        <h1>Key Policy Statements</h1>
        <br />
        <p>
            <strong>Environmental Policy Statement -</strong> Globetrotters is committed to responsible operations that
            protect and enhance the environment. Our approach ensures effective environmental management across all business
            activities. <span id="openEnvModal" style="cursor:pointer; color:#2563eb;">Read our Environmental
                Statements.</span>
        </p>
        <p>
            <strong>Health & Safety Policy Statement -</strong>We prioritise the health, safety, and welfare of employees
            and those affected by our operations. <span id="openHealthModal" style="cursor:pointer; color:#2563eb;">
                Read our Health & Safety Policy Statement
            </span>

        </p>
        <p>
            <strong>Modern Slavery & Human Trafficking Statement -</strong> We actively mitigate risks of modern slavery and
            human trafficking within our operations and supply chain. <span id="openSlaveryModal"
                style="cursor:pointer; color:#2563eb;">
                Read our Modern Slavery & Human Trafficking Statement
            </span>
        </p>
        <p>
            <strong>Sustainability Statement -</strong> Our sustainability commitment focuses on environmental
            responsibility, staff well-being, and long-term economic success.<span id="openSustainModal"
                style="cursor:pointer; color:#2563eb;">
                Read our Sustainability Statement
            </span>
        </p>
        <p>
            <strong>Data Protection Policy -</strong> Globetrotters handles personal data in compliance with GDPR to meet
            legal and organisational obligations.<span id="openDataModal" style="cursor:pointer; color:#2563eb;">
                Read our Data Protection Policy.
            </span>
        </p>
        <p>
            <strong>Data Protection Privacy Notice – Customers -</strong> This notice applies to personal data held by
            Globetrotters and outlines what information we collect, how we use and protect it, and who we share it with.
            <span id="openReadMoreModal" style="cursor:pointer; color:#2563eb;">
                Read More.
            </span>
        </p>
        <br />
        <h1> Reports</h1>
        <br />
        <p>
            <strong>Group Tax Strategy -</strong> Our tax strategy supports economic growth and ensures responsible business
            sustainability.<span id="openReportModal" style="cursor:pointer; color:#2563eb;">
                2024 Report.
            </span>
            <br />

        </p>
        <p>
            <strong>Gender Pay Gap Reports -</strong> In compliance with the UK Equality Act, we publish annual Gender Pay
            Gap reports.
        </p>

    </div>
    <style>
        /* Container */
        .et_pb_text_inner {
            max-width: 1100px;
            margin: auto;
            padding: 60px 20px;
            line-height: 1.8;
            font-family: "Inter", sans-serif;
            color: #000;
        }

        .et_pb_text_inner p strong {
            color: #000;

        }

        .et_pb_text_inner p span {
            color: #2563eb;

        }

        /* Main Heading */
        .et_pb_text_inner h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #000;
            border-bottom: 3px solid #2563eb;

        }

        /* Section Headings */
        .et_pb_text_inner h2 {
            font-size: 28px;
            margin-top: 40px;
            margin-bottom: 15px;
            color: #60a5fa;
            font-weight: 600;
        }

        /* Paragraphs */
        .et_pb_text_inner p {
            font-size: 16px;
            margin-bottom: 18px;
            color: #000;
        }

        /* Lists */
        .et_pb_text_inner ul {
            margin: 20px 0 25px 20px;
            padding-left: 15px;
        }

        .et_pb_text_inner ul li {
            margin-bottom: 10px;
            font-size: 16px;
            position: relative;
        }

        /* Custom bullet */
        .et_pb_text_inner ul li::marker {
            color: #3b82f6;
        }

        /* Links */
        .et_pb_text_inner a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }

        .et_pb_text_inner a:hover {
            text-decoration: underline;
            color: #60a5fa;
        }

        /* Highlight strong */
        .et_pb_text_inner strong {
            color: #ffffff;
        }

        /* Section spacing */
        .et_pb_text_inner h2+p {
            margin-top: 10px;
        }

        /* Responsive */

        /* Tablet */
        @media (max-width: 1024px) {
            .et_pb_text_inner {
                padding: 50px 25px;
            }

            .et_pb_text_inner h1 {
                font-size: 34px;
                padding-top: 60px;
            }

            .et_pb_text_inner h2 {
                font-size: 24px;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {

            .et_pb_text_inner {
                padding: 40px 20px;
            }

            .et_pb_text_inner h1 {
                font-size: 28px;
                line-height: 1.3;
            }

            .et_pb_text_inner h2 {
                font-size: 22px;
            }

            .et_pb_text_inner p,
            .et_pb_text_inner ul li {
                font-size: 15px;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {

            .et_pb_text_inner {
                padding: 30px 15px;
            }

            .et_pb_text_inner h1 {
                font-size: 24px;
            }

            .et_pb_text_inner h2 {
                font-size: 20px;
            }

        }
    </style>

    <!-- Modal -->
    <div id="envModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeEnvModal">&times;</span>

            <h2>ENVIRONMENTAL POLICY STATEMENT – MARCH 2025</h2>

            <p>
                Globetrotters is one of the UK’s leading providers in complete supply chain management,
                warehousing, and freight logistics solutions.
            </p>

            <p>
                This Environmental Policy Statement is set to influence the activities of the business and
                all people connected with the business. Through the operation of this Policy Statement, an
                environmentally strong and sustainable business will be maintained and improved.
                Environmental aspects of the business have equal priority and importance to other business
                processes and are controlled within the management systems of the Group companies.
            </p>

            <p><strong>Globetrotters commits to:</strong></p>

            <ul>
                <li>Compliance with all applicable Environmental legislation and any other requirements it deems appropriate
                </li>
                <li>Continually reviewing the environmental impact of the Group’s activities</li>
                <li>Prevent pollution and protecting the environment as far as reasonably practicable</li>
                <li>Address the needs of its stakeholders</li>
                <li>Provide individuals with a level of training to enable them to operate effectively and in an
                    environmentally considered way</li>
                <li>Reduce waste to landfill by 5% compared to 2024 (tCo2 to landfill), maintaining 9 sites reporting Zero
                    to Landfill and improve the overall efficient use of natural resources.</li>
            </ul>

            <p>
                The Board are accountable for the effectiveness of the Group Environmental Management System
                and ensuring that this Policy Statement and the objectives contained are compatible with the
                strategic direction of the Group further demonstrating our commitment to adhere to the
                requirements set out in ISO14001:2015.
            </p>

            <p>
                The Board will commit the resources including training, so everyone connected to the business
                understands their Duty of Care towards the environment. Every employee must understand and
                work with an environmental responsibility and through these principles help to reduce the
                environmental impact of our business.
            </p>

            <p>
                Objectives and Management Action Plans are set and reviewed in light of strategy, the competitive
                environment and the requirements of our stakeholders.
            </p>

            <p>
                A management structure distributing responsibility and authority over the different aspects of the
                business to named individuals has been established.
            </p>
        </div>
    </div>
    <div id="healthModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeHealthModal">&times;</span>

            <h2>HEALTH AND SAFETY POLICY STATEMENT – MARCH 2025</h2>

            <p>
                The Health and Safety at Work Act 1974 imposes a statutory duty on employers to ensure,
                insofar as is reasonably practicable, the health, safety and welfare of their employees
                whilst at work. This duty also extends to others who may be affected by the activities of Globetrotters.
            </p>

            <p><strong>The Aims and Commitments; Globetrotters will:</strong></p>

            <ul>
                <li>Provide a safe and healthy working environment and will not compromise the health and safety of any
                    individual</li>
                <li>Provide the necessary training and resources to all its staff to allow for the safe performance of day
                    to day operations</li>
                <li>Comply, as far as reasonably practicable, with relevant health and safety legislation and other
                    requirements</li>
                <li>Strive to identify opportunities for continually improving its health, safety and welfare performance
                    and standards</li>
            </ul>

            <p>
                Globetrotters believes that having effective safety management requires the involvement of staff at all
                levels.
            </p>

            <p><strong>In order to meet these Aims and Commitments Globetrotters will:</strong></p>

            <ul>
                <li>Develop, implement and monitor health and safety policies and procedures appropriate to its current and
                    emerging business activities</li>
                <li>Identify annual H&S improvement targets based on the previous year’s safety performance</li>
                <li>Actively support and champion the “DO IT SAFELY” health and safety programme</li>
                <li>Identify the hazards and risks associated with its activities and implement appropriate control measures
                </li>
                <li>Establish channels of communication that encourage staff to openly contribute to continually improving
                    health and safety performance</li>
                <li>Provide appropriate resources to ensure that this policy statement is implemented and maintained</li>
                <li>Provide sufficient information, advice, training and supervision to ensure people under the control of
                    Globetrotters are fully aware of their individual responsibilities</li>
            </ul>

            <p><strong>All staff, regardless of their position, have a duty to co-operate in the delivery of this Policy
                    by:</strong></p>

            <ul>
                <li>Taking reasonable care for their own health and safety and that of others who may be affected by their
                    actions</li>
                <li>Co-operating with Globetrotters in maintaining high standards of health and safety and supporting the
                    “DO IT SAFELY” programme</li>
                <li>Maintaining their place of work and equipment in a clean, tidy and safe condition</li>
                <li>Making proper use of workplace equipment including the wearing of issued PPE</li>
                <li>Complying with training and Safe Working Procedures where applicable</li>
                <li>Not arriving for work under the influence of drugs or alcohol</li>
            </ul>

        </div>
    </div>
    <div id="slaveryModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeSlaveryModal">&times;</span>

            <h2>MODERN SLAVERY & HUMAN TRAFFICKING STATEMENT – MARCH 2025</h2>

            <p>
                Globetrotters recognises its responsibility to take a robust approach to slavery and human trafficking.
                All employees are expected to report concerns and management should act upon them.
            </p>

            <h3>Organisational Structure and Supply Chains</h3>

            <p><strong>Business Activities:</strong> Globetrotters is the United Kingdom’s leading independent freight
                forwarding organisation, offering complete logistics, storage and supply chain management solutions.
                The company operates across multiple branches in the UK and internationally.</p>

            <p><strong>Supply Chain:</strong> Globetrotters works with carefully selected independent partners based on
                long-term strategic relationships. These activities involve facilitating the movement of goods globally.</p>

            <h3>Responsibility</h3>

            <ul>
                <li>Zero tolerance to slavery and human trafficking across all operations</li>
                <li>All Directors and Senior Managers are responsible for compliance</li>
            </ul>

            <h3>Relevant Policies and Processes</h3>

            <ul>
                <li>Use of reputable employment agencies and verification of their practices</li>
                <li>Fully auditable HR and payroll systems</li>
                <li>Investigation and remedial action for any reported modern slavery concerns</li>
                <li>Communication of anti-slavery commitments in contracts and working manuals</li>
            </ul>

            <h3>Our Employees</h3>

            <ul>
                <li>Commitment to fair salary and working conditions</li>
                <li>Safe and secure workplace</li>
                <li>Zero tolerance for discrimination</li>
                <li>Opposition to slavery and human trafficking</li>
                <li>Respect for employee rights including union membership</li>
            </ul>

            <h3>Awareness Raising Programme</h3>

            <p>
                Awareness is raised through internal communications such as emails, posters, and intranet updates.
            </p>

            <ul>
                <li>Understanding the Modern Slavery Act 2015</li>
                <li>How employees can report concerns</li>
                <li>Available external support such as helplines</li>
            </ul>

            <h3>Board Director Approval</h3>

            <p>
                This statement is made pursuant to Section 54(1) of the Modern Slavery Act 2015 and applies to all
                Globetrotters Group companies. It is reviewed and updated annually.
            </p>

        </div>
    </div>
    <div id="sustainModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeSustainModal">&times;</span>

            <h2>SUSTAINABILITY STATEMENT</h2>

            <p>
                Globetrotters is committed to building a strong sustainable business. The three main pillars
                of this statement are environmental care, social well-being, and economic growth, all of which
                hold equal importance within our business processes.
            </p>

            <p><strong>Globetrotters commits to:</strong></p>

            <ul>
                <li>Reducing its carbon footprint</li>
                <li>Reducing energy and water consumption and increasing waste diversion</li>
                <li>Increasing usage of renewable energy and environmentally friendly products and services</li>
                <li>Providing training and communications to staff so they understand their duty of care towards the
                    environment</li>
                <li>Being an equal opportunities employer that promotes inclusion for all staff</li>
                <li>Providing a healthy, safe and secure workplace</li>
                <li>Investing in innovative solutions to reduce CO2 emissions</li>
                <li>Supporting local charities across the UK</li>
            </ul>

            <p>
                The Board of Directors are accountable for ensuring that sustainability objectives and
                initiatives align with the strategic direction of the Group.
            </p>

            <p>
                Every employee is provided with tools and information to act responsibly towards sustainability.
                These principles help create a positive impact on the environment, social well-being, and economic growth.
            </p>

            <p>
                Initiatives are reviewed regularly in line with strategy, competitive environment, and stakeholder
                requirements.
                As part of the supply chain, Globetrotters supports customers in achieving their sustainability goals.
            </p>

            <p>
                Authority to implement sustainability initiatives is distributed across the organisation to ensure
                effective day-to-day operations.
            </p>

        </div>
    </div>
    <div id="reportModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeReportModal">&times;</span>

            <h2> GLOBETROTTERS HOLDINGS PLC – UK TAX STRATEGY 2024</h2>

            <h3>Introduction</h3><br />
            <p>
                In accordance with the requirements of Paragraph 16(2), Schedule 19, Finance Act 2016, Davies
                Turner Holdings Plc and its UK subsidiaries (“the Group”) presents its UK Tax Strategy for the year
                ended 31 March 2024. This UK Tax Strategy applies to all UK taxes applicable to the Group and has
                been approved by The Board of Directors of Globetrotters Holdings plc. The UK Tax Strategy will be
                reviewed regularly and will be approved annually by The Board of Directors.

            </p><br />

            <h3>Tax Governance and Risk Management</h3><br />
            <p>
                The Group is committed to being a responsible taxpayer and proactively manages tax and other risks.
                Recognition and effective management of tax and other risks are important elements of business
                activities at all levels within the Group. Policies, procedures and controls are implemented and
                assessed through a central risk and controls matrix. These are overseen by the Group Finance
                Director and are monitored and reviewed within the Group’s Finance Department. External tax
                advisors are on hand to provide tax advice and confirmation where required, for example when new
                legislation is introduced or in areas of uncertainty, and the Group will seek to consult with their
                external tax advisors to minimise the risk of non-compliance. The Group’s external tax advisors are
                independent of the Group’s auditors.<br />
                Day to day management of the Group’s tax affairs is delegated to a team of appropriately qualified
                and experienced in-house accountants within the Finance Department. The Group’s Finance
                Department is led by the Group Finance Director (the Senior Accounting Officer) who is supported by
                the Head of Group Accounts and other professionally qualified managers. All members of the
                Finance Department are responsible for complying with the principles and the strategy outlined in this
                document. We are committed to supporting the professional development of all personnel, and to
                providing them with training and resources required for the performance of their roles.

            </p><br />




            <h3>Attitude towards tax planning and level of tax risk</h3><br />
            <p>
                The Group’s policy is to not engage in tax planning arrangements that are not underpinned by a
                commercial activity or inconsistent with the evident intention of relevant legislation.
                When entering into commercial transactions, the Group will seek to make use of available tax
                incentives, reliefs, and exemptions offered by government to encourage growth and investment in
                order to enhance the value delivered to shareholders.
                The Group seeks to comply fully with its regulatory obligations and strives to ensure its tax
                arrangements are consistent with a low tax risk approach to conducting its business.
                Where the tax treatment of any particular material transaction is uncertain, external tax advice will be
                sought before proceeding with the transaction.
            </p>
            <br />


            <h3>The approach towards dealings with HMRC</h3><br />
            <p>
                The Group is committed to the principles of openness and transparency in its approach to dealings
                with HMRC. These values contribute to an open and honest relationship with HMRC, making fair,
                accurate and timely disclosures in returns and correspondence, and dealing with queries and
                information requests in a timely manner. The Group is committed to being proactive in its
                communications with HMRC.

            </p><br />



        </div>
    </div>

    <div id="dataModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeDataModal">&times;</span>

            <h2>DATA PROTECTION POLICY</h2>

            This Policy applies to all active and trading companies in the Globetrotters Group of Companies, which are:<br/>
             Globetrotters Holdings plc<br/>
             Globetrotters plc<br/>
             Globetrotters & Co Limited<br/>
             Globetrotters Air Cargo Limited<br/>
             Globetrotters Ireland Limited<br/>
            These companies are collectively referred to in this Policy as ‘Globetrotters’.<br/>
            1. Context and Overview<br/>
            1.1 Introduction<br/>
            Globetrotters needs to gather and use certain information about individuals. These can include customers,
            suppliers, business contacts, employees and other people the organisation has a relationship with or may need to
            contact.<br/>
            This Policy describes how this personal data must be collected, handled and stored to meet the Globetrotters’s
            data protection standards – and to comply with the law.<br/>
            1.1.1 Why this Policy exists<br/>
            This Data Protection Policy ensures Globetrotters:<br/>
             Complies with data protection law and follows good practice<br/>
             Protects the rights of staff, customers and partners<br/>
             Is open about how it stores and processes individuals’ data<br/>
             Protects itself from the risks of a data breach<br/>
            1.2 Data Protection Law<br/>
            The General Data Protection Regulations and related Data Protection legislation describe how organisations –
            including Globetrotters – must collect, handle and store personal information.<br/>
            These rules apply regardless of whether data is stored electronically, on paper or on other materials.
            To comply with the law, personal information must be collected and used fairly, stored safely and not disclosed
            unlawfully.<br/>
            The Data Protection legislation is underpinned by eight important principles which state that personal data
            must:<br/>
            1. Be processed fairly and lawfully<br/>
            2. Be obtained only for specific, lawful purposes<br/>
            3. Be adequate, relevant and not excessive<br/>
            4. Be accurate and kept up to date<br/>
            5. Not be held for any longer than necessary<br/>
            6. Processed in accordance with the rights of data subjects<br/>
            7. Be protected in appropriate ways<br/>
            8. Not be transferred outside the European Economic Area (EEA), unless that country or territory also
            ensures an adequate level of protection<br/>

            2. People, Risks and Responsibilities<br/>
            2.1 Policy Scope<br/>
            This Policy applies to:<br/>
             The head office of Globetrotters<br/>
             All hubs, branches, departments and teams of Globetrotters<br/>
             All staff of Globetrotters<br/>
             All contractors, suppliers and other people working on behalf of Globetrotters<br/>
            It applies to all data that Globetrotters holds relating to identifiable individuals, even if that information
            technically<br/>
            falls outside of the Data Protection legislation. This can include:<br/>
             Names of individuals<br/>
             Postal addresses<br/>
             Email addresses<br/>
             Telephone numbers<br/>
             …plus any other information relating to individuals<br/>
            2.2 Data Protection Risks<br/>
            This Policy helps to protect Globetrotters from some very real data security risks, including:<br/>
             Breaches of confidentiality; for instance, information being given out inappropriately<br/>
             Failing to offer choice; for instance, all individuals should be free to choose how Globetrotters uses data
            relating to them<br/>
             Reputational damage; for instance, Globetrotters could suffer if hackers successfully gained access to
            sensitive data<br/>
            2.3 Responsibilities<br/>
            Everyone who works for or with Globetrotters has some responsibility for ensuring data is collected, stored and
            handled appropriately.<br/>
            Each hub, branch, department or team that handles personal data must ensure that it is handled and processed in
            line with this Policy and data protection principles.<br/>
            However, these people have key areas of responsibility:<br/>
             The board of directors of each active and trading company in the Globetrotters Group of Companies is
            ultimately responsible for ensuring that Globetrotters meets its legal obligations<br/>
             The Head of Legal and Company Secretary is responsible for:<br/>
            o Keeping the board updated about data protection responsibilities, risks and issues<br/>
            o Reviewing all data protection procedures and related policies<br/>
            o Arranging data protection training and advice for the people covered by this Policy<br/>
            o Handling data protection questions from staff and anyone else covered by this Policy<br/>
            o Dealing with requests from individuals to see the data Globetrotters holds about them (also
            called ‘subject access requests’)<br/>
            o Checking and approving any contracts or agreements with third parties that may handle the
            Globetrotters’s sensitive data<br/>
            o Addressing any data protection queries from journalists or media outlets like newspapers
             The IT Managers are responsible for:<br/>
            o Ensuring all IT systems, services and equipment used for storing data meet acceptable security
            standards<br/>
            o Performing regular checks and scans to ensure security hardware and software is functioning
            properly<br/>
            o Evaluating any third-party services Globetrotters is considering using to store or process data; for
            instance, cloud computing services<br/>
             The Marketing Managers are responsible for:<br/>
            o Approving any data protection statements attached to communications such as emails and
            letters<br/>
            o Where necessary, working with other staff to ensure marketing initiatives abide by data
            protection principles<br/>
            3. General Staff Guidelines<br/>
             The only people able to access data covered by this Policy should be those who need it for their work<br/>
             Data should not be shared informally; when access to confidential information is required, employees
            can request it from their line managers<br/>
             Globetrotters will provide training to all relevant employees to help them understand their
            responsibilities when handling data<br/>
             Employees should keep all data secure, by taking sensible precautions and following the guidelines below
             In particular, strong passwords must be used and they should never be shared<br/>
             Personal data should not be disclosed to unauthorised people, either within Globetrotters or externally
             Data should be regularly reviewed and updated if it is found to be out of date; if no longer required, it
            should be deleted and disposed of<br/>
             Employees should request help from their line manager, the Head of Legal and Company Secretary or the
            Group HR Advisor if they are unsure about any aspect of data protection<br/>
            4. Data Storage<br/>
            These rules describe how and where data should be safely stored. Questions about storing data safely can be
            directed to the IT manager, your line manager, the Head of Legal and Company Secretary or the Group HR Advisor.
            When data is stored on paper, it should be kept in a secure place where unauthorised people cannot see it.
            These guidelines also apply to data that is usually stored electronically but has been printed out for some
            reason:<br/>
             When not required, the paper or files should be kept in a locked drawer or filing cabinet<br/>
             Employees should make sure paper and printouts are not left where unauthorised people could see
            them, for example on a printer or hot desk<br/>
             Data printouts should be shredded and disposed of securely when no longer required
            When data is stored electronically, it must be protected from unauthorised access, accidental deletion and
            malicious hacking attempts:<br/>
             Data should be protected by strong passwords that are changed regularly and never shared between
            employees<br/>
             If data is stored on removable media (like a CD, DVD, memory stick or tape), these should be kept locked
            away securely when not being used<br/>

             Data should only be stored on designated drives and servers, and should only be uploaded to an
            approved cloud computing services<br/>
             Servers containing personal data should be sited in a secure location, away from general office space<br/>
             Data should be backed up frequently; those backups should be tested regularly, in line with the Davies
            Turner’s standard backup procedures<br/>
             Data should never be saved directly to laptops or other mobile devices such as tablets or smart phones<br/>
             All servers and computers containing data should be protected by approved security software and a
            firewall<br/><br/>
            5. Data Use<br/>
            Personal data is of no value to Globetrotters unless the business can make use of it i.e. the business must have
            a
            reason for obtaining and keeping it. However, it is when personal data is accessed and used that it can be at
            the<br/>
            greatest risk of loss, corruption or theft:<br/>
             When working with personal data, employees should ensure the screens of their computers are always
            locked when left unattended<br/>
             Personal data should not be shared informally; in particular, it should never be sent by email, as this form
            of communication is not secure<br/>
             Data must be encrypted before being transferred electronically<br/>
             Personal data should never be transferred outside of the European Economic Area<br/>
             Employees should not save copies of personal data to their own computers; always access and update
            the central copy of any data<br/>
            Notwithstanding the above, personal data may be processed to comply with a law e.g. relating to a customs entry
            or clearance and to perform an agreed contract or service for a customer.<br/><br/>
            6. Data Accuracy<br/>
            The law requires Globetrotters to take reasonable steps to ensure data is kept accurate and up to date.
            It is the responsibility of all employees who work with data to take reasonable steps to ensure it is kept as
            accurate<br/><br/>
            and up to date as possible.
             Data will be held in as few places as necessary; staff should not create any unnecessary additional data
            sets
             Staff should take every opportunity to ensure data is updated; for instance, by confirming a customer’s
            details when they call
             Globetrotters will make it easy for data subjects to update the information it holds about them
             Data should be updated as inaccuracies are discovered; for instance, if a customer can no longer be
            reached on their stored telephone number, it should be removed from the database
             It is the Marketing Managers responsibility to ensure marketing databases are checked regularly against
            suppression files<br/><br/>
            7. Subject Access Request<br/><br/>
            All individuals who are the subject of personal data held by Globetrotters are entitled to:<br/>
             Ask what information the Globetrotters holds about them and why<br/>
             Ask how to gain access to it<br/>
             Be informed how to keep it up to date<br/>

             Be informed how Globetrotters is meeting its data protection obligations<br/>
            If an individual contacts Globetrotters requesting this information, this is called a subject access request.
            Subject access requests from individuals should be made by email, addressed to the Head of Legal and Company
            Secretary or Group HR Advisor of Globetrotters at info@daviesturner.co.uk.<br/>
            Globetrotters will always verify the identity of anyone making a subject access request before handing over any
            information.<br/><br/>
            8. Disclosing Data for Other Reasons<br/><br/>
            In certain circumstances, the Data Protection legislation allows personal data to be disclosed to law
            enforcement
            agencies without the consent of the data subject.
            Under these circumstances, Globetrotters will disclose requested data. However, Globetrotters will ensure the
            request is legitimate, seeking assistance from the board and from Globetrotters’s legal advisers where
            necessary.<br/><br/>
            9. Providing Information<br/><br/>
            Globetrotters aims to ensure that individuals are aware that their data is being processed, and that they
            understand:
             How the data is being used
             How to exercise their rights
            To these ends, Globetrotters has Privacy Notices, setting out how data relating to individuals is used by Davies
            Turner.<br/><br/>
            10. Related Globetrotters Policy Documentation<br/><br/>
             Privacy Notices, relating to<br/>
            o Recruitment<br/>
            o Employees<br/>
            o Website users<br/>
            o Customers<br/>
             IT Policy<br/>
             Records Management Policy<br/><br/>

        </div>
    </div>

    <div id="readMoreModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeReadMoreModal">&times;</span>

            <h2>DATA PROTECTION PRIVACY NOTICE – CUSTOMERS</h2>

            <h3>1. Introduction</h3>
            <p>
                This Notice (Privacy Notice) applies to information held about you and individuals connected to your
                business
                by members of the Globetrotters Group of Companies as data controllers, as described below. It explains what
                information we collect about you and individuals who are connected to your business including, in turn, your
                customers, how we’ll use that information, who we’ll share it with, the circumstances when we’ll share it,
                and
                what steps we’ll take to make sure it stays private and secure. It continues to apply even if your agreement
                for
                services with us ends. It should also be read alongside our standard terms and conditions i.e. the then
                current
                British International Freight Association Standard Terms and Conditions.
                Wherever we’ve said ‘you’ or ‘your’, this means you, any authorised person in your business who we have
                dealings with in relation to your account and other related people (including authorised signatories).
                Parts of this Notice relate only to individuals, and we have highlighted this where relevant. This includes
                individuals whose business does not have a separate legal identity (e.g. sole traders and partners in a
                general
                partnership, but excluding limited companies and other forms of corporate entity), and individuals connected
                to your business. An individual connected to your business could be any guarantor, a director, officer or
                employee, partners or members of a partnership, any substantial owner, controlling person, or representative
                (e.g. authorised signatories), agent or nominee, or any other persons or entities with whom you have a
                relationship that’s relevant to your relationship with us, for example, a customer of yours.
                You must ensure that any relevant individuals are made aware of this Notice and the individual rights and
                information it sets out, prior to providing their information to us or our obtaining their information from
                another source. If you, or anyone else on your behalf, has provided or provides information on an individual
                connected to your business to us, you or they must first ensure that you or they have the authority to do
                so.
                When we say ‘we’, we mean the Globetrotters Group of Companies which act as a data controller in respect of
                your personal data.
            </p>

            <h1>2. What information we collect relating to you and individuals connected to your
                business</h1>
            <p>We’ll only collect your information and information relating to individuals connected to your business, in
                line
                with relevant regulations and law. We may collect it from a range of sources and it may relate to any of our
                services. We may also collect information about you and individuals connected to your business when you or
                they interact with us, e.g. visit our website, call us or visit one of our branches, or ask about any of our
                services.
                Some of this information will come directly from you and individuals connected to your business, e.g. when
                providing information to open an account or to perform our contract with you. We might also get some of it
                from publicly available sources. The information we collect may include:</p>

            <h3>2.1 Information relating to you and individuals connected to your business that you provide to us, or
                which others provided to us on your behalf e.g.:</h3>
            <ul>
                <li>Where you’re an individual, personal details (e.g. name); we’ll also collect this information about
                    individuals connected to your business
                </li>
                <li> Contact details (e.g. address, email address, position in company, landline and mobile numbers)
                </li>
                <li>Market research (e.g. information and opinions expressed when participating in market research)</li>
                <li>User login and subscription data (e.g. login credentials)</li>
                <li>Other information about you and individuals connected to your business that you’ve provided to us
                    by filling in forms or by communicating with us, whether face-to-face, by phone, email, online, or
                    otherwise</li>

            </ul>

            <h3>2.2 Information we collect or generate about you and individuals connected to your business, e.g.:</h3>
            <ul>
                <li>Information about your relationship with us, and the individuals connected to your business and your
                    and their ways of interacting with us
                </li>
                <li> Marketing and sales information (e.g. details of the services you receive and your preferences)
                </li>
                <li>Cookies and similar technologies we use to recognise you and individuals connected to your business,
                    remember preferences and tailor the content we provide</li>
                <li>Risk rating information (e.g. credit risk rating)</li>
                <li>Records of correspondence and other communications between you and your representatives and us,
                    including email, instant messages and social media communications</li>

            </ul>
            <h3>2.2 Information we collect from other sources relating to you and individuals connected to your
                business, e.g.:</h3>
            <ul>
                <li>Information you’ve asked us to collect for you

                </li>
                <li> Information from third parties
                </li>


            </ul>
            <h3>3. How we’ll use your information and information relating to individuals connected
                to your business</h3>
            <p>
                We’ll only use information on you and individuals connected to your business where we have consent or we
                have another lawful reason for using it. These reasons include where we need to:

            </p>
            <ul>
                <li>Pursue our legitimate interests
                </li>
                <li>Process the information to carry out an agreement we have with you</li>
                <li>Process the information to comply with a legal obligation</li>

            </ul>
            <p>
                The reasons we use your information and information relating to individuals connected to your business
                include:

            </p>
            <p>
                • Delivering our services<br />
                • Carrying out your instructions<br />
                • Managing our relationship with you, including (unless you tell us otherwise) telling you about services
                we think may be relevant for you<br />
                • Understanding how you use our services<br />
                • Undertaking risk management<br />
                • Undertaking service improvement<br />
                • Undertaking data analytics to better understand your circumstances and preferences so we can make
                sure we can provide you with the best advice and offer you a tailored service<br />
                • Protecting our legal rights and complying with our legal obligations<br />

            </p>
            3.1 Tracking or recording what you say or do<br />
            We may record details of your interactions (and the interactions of the individuals connected to your business)
            with us. We may record and keep track of conversations with us including phone calls, face-to-face meetings,
            letters, emails, video chats and any other kinds of communication. We may use these to check your
            instructions to us, assess, analyse and improve our service, train our people, manage risk or to prevent and
            detect crimes. We may also capture additional information about these interactions (e.g. telephone numbers
            that we are called from and information about devices or software that are used). We use closed circuit
            television (CCTV) in and around our sites and these may collect photos videos or voice recordings of you and
            the individuals connected to your business.<br />
            3.2 Compliance with laws and regulatory compliance obligations<br />
            We’ll use your information and information relating to individuals connected to your business to meet our
            compliance obligations. We’ll only do this on the basis that it’s needed to comply with a legal obligation or
            it’s<br />
            in our legitimate interests and that of others.<br />
            3.3 Marketing and market research<br />
            We may use your information and information relating to individuals connected to your business to provide
            information about Globetrotters services. We may send marketing messages by post, email, telephone, text or
            secure messages. If you or individuals connected to your business wish to change how marketing messages are
            sent or wish to stop receiving these, please contact us.
            We may use your information and information relating to individuals connected to your business for market
            research. Market research agencies acting on our behalf may get in touch with you or individuals connected to
            your business by post, telephone, email or other methods of communication to invite you or them to take part
            in research. We won’t invite you or individuals connected to your business to take part in research using a
            communication method if you (or they) have asked us not to get in touch that way.<br />

            4. Who we might share information with<br />
            We may share your information and information relating to individuals connected to your business with others
            where lawful to do so including where we or they:<br />
            • Need to in order to provide you with services you’ve requested<br />
            • Have a public or legal duty to do so<br />
            • Need to in connection with regulatory reporting, litigation or asserting or defending legal rights and
            interests<br />
            • Have a legitimate business reason for doing<br />
            • Have asked you or the individuals connected to your business for your permission to share it, and you
            (or they) have agreed<br />

            We may share your information and information relating to individuals connected to your business for these
            purposes with others, including:<br />
            • Other Davis Turner Group Companies and any sub-contractors, agents or service providers who work
            for us or provide services to us or other Globetrotters Group Companies (including their employees,
            sub-contractors, service providers, directors and officers)<br />
            • Law enforcement, government, courts, dispute resolution bodies, auditors<br />
            • Other parties involved in any disputes, including disputed transactions<br />
            • Anybody else that we’ve been instructed to share your information with by you<br />
            • Insurers and their underwriters so they can provide you with a quote or cover<br />

            5. How long we’ll keep information<br />
            We’ll keep information in line with our Records Management Policy. For example, we’ll normally keep your
            details for a period of six full years from the end of our relationship with you. This enables us to comply with
            legal and regulatory requirements or use it where we need to for our legitimate purposes such as managing
            your account and dealing with any disputes or concerns that may arise.
            We may need to retain information for a longer period where we need the information to comply with
            regulatory or legal requirements or where we may need it for our legitimate purposes (e.g. to help us respond
            to queries or complaints).
            If we don’t need to retain information for this period of time, we may destroy, delete or anonymise it more
            promptly.<br />
            Where you receive products and services from third parties (e.g. insurance) who Globetrotters has introduced
            you to, those third parties may keep your information, and information relating to individuals connected to
            your business, in line with additional terms and conditions that apply to their product and services.
            <br />

            6. Rights of individuals<br />
            Individuals have a number of rights in relation to the information that we hold about them. These rights
            include:<br />
            • The right to access information we hold about them and to obtain information about how we process
            it<br />
            • In some circumstances, the right to withdraw their consent to our processing of their information,
            which they can do at any time; we may continue to process their information if we have another
            legitimate reason for doing so<br />
            • In some circumstances, the right to receive certain information they have provided to us in an
            electronic format and/or request that we transmit it to a third party<br />
            • The right to request that we rectify their information if it’s inaccurate or incomplete<br />
            • In some circumstances, the right to request that we erase their information; we may continue to
            retain their information if we’re entitled or required to retain it<br />
            • The right to object to, and to request that we restrict, our processing of their information in some
            circumstances; again, there may be situations where individuals object to, or ask us to restrict, our
            <br />
            processing of their information but we’re entitled to continue processing their information and/or to
            refuse that request<br />
            Individuals (including individuals connected to your business) can exercise their rights by contacting us.
            Individuals also have a right to complain to the UK Information Commissioner’s Office by visiting
            www.ico.org.uk.<br />

            7. Credit reference checks<br />
            We may perform credit and identity checks on you (and certain individuals connected to your business) with
            one or more credit reference agencies (CRAs). We may also make periodic searches at CRAs to manage your
            account with us.<br />
            To do this, we’ll supply your information (and information of certain individuals connected to your business) to
            CRAs and they’ll give us information about you and them. This will include information from your credit
            application and about your financial situation, payment data and financial history (and the financial situation
            and history of the relevant individuals connected your business). CRAs will supply us with both public and
            shared credit information, financial situation and historic information. CRAs will also share your data with
            other organisations for the purpose of credit risk insurance. For more information see Credit Reference
            Agency Information Notice (CRAIN) | Experian.<br />
            We may use this information to:<br />
            • Assess if we can offer you credit<br />
            • Verify the accuracy of the data you’ve provided to us<br />
            • Prevent criminal activity<br />
            • Manage your account with us<br />
            • Recover debts<br />
            We’ll continue to exchange information about you (and individuals connected to your business) with CRAs
            while you have a relationship with us.<br />

            8. What we need from you<br />
            You’re responsible for making sure the information you give us, information which is provided by individuals
            connected to your business, or information which is otherwise provided on your behalf is accurate and up to
            date, and you must tell us if anything changes as soon as possible.<br />
            9. How we keep information secure<br />
            We use a range of measures to keep information safe and secure which may include encryption, password
            protection and other forms of security. We require our staff and any third parties who carry out any work on
            our behalf to comply with appropriate compliance standards including obligations to protect any information
            and applying appropriate measures for the use and transfer of information.
            10. More details about your information and information relating to individuals<br />
            connected to your business<br />
            You and individuals connected to your business can obtain further information on anything we’ve said in this
            Privacy Notice or contact us by writing to: The Head of Legal and Company Secretary, West Midlands Freight
            Terminal, Station Road, Coleshill B46 1DT or at info@daviesturner.co.uk.<br />
        </div>
    </div>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 40px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            background: #fff;
            margin: auto;
            padding: 30px;
            width: 70%;
            max-height: 85vh;
            overflow-y: auto;
            border-radius: 8px;
            line-height: 1.7;
            font-family: Arial, sans-serif;
        }

        .modal-content h2 {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .modal-content ul {
            margin-left: 20px;
        }

        .close-btn {
            float: right;
            font-size: 26px;
            cursor: pointer;
        }
    </style>
    <script>
        document.getElementById("openEnvModal").onclick = function () {
            document.getElementById("envModal").style.display = "block";
        };

        document.getElementById("closeEnvModal").onclick = function () {
            document.getElementById("envModal").style.display = "none";
        };

        // outside click close
        window.onclick = function (event) {
            let modal = document.getElementById("envModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
    <script>
        document.getElementById("openHealthModal").onclick = function () {
            document.getElementById("healthModal").style.display = "block";
        };

        document.getElementById("closeHealthModal").onclick = function () {
            document.getElementById("healthModal").style.display = "none";
        };

        // outside click close
        window.addEventListener("click", function (event) {
            let modal = document.getElementById("healthModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("openSlaveryModal").onclick = function () {
            document.getElementById("slaveryModal").style.display = "block";
        };

        document.getElementById("closeSlaveryModal").onclick = function () {
            document.getElementById("slaveryModal").style.display = "none";
        };

        window.addEventListener("click", function (event) {
            let modal = document.getElementById("slaveryModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("openSustainModal").onclick = function () {
            document.getElementById("sustainModal").style.display = "block";
        };

        document.getElementById("closeSustainModal").onclick = function () {
            document.getElementById("sustainModal").style.display = "none";
        };

        window.addEventListener("click", function (event) {
            let modal = document.getElementById("sustainModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("openReportModal").onclick = function () {
            document.getElementById("reportModal").style.display = "block";
        };

        document.getElementById("closeReportModal").onclick = function () {
            document.getElementById("reportModal").style.display = "none";
        };

        window.addEventListener("click", function (event) {
            let modal = document.getElementById("reportModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("openDataModal").onclick = function () {
            document.getElementById("dataModal").style.display = "block";
        };

        document.getElementById("closeDataModal").onclick = function () {
            document.getElementById("dataModal").style.display = "none";
        };

        window.addEventListener("click", function (event) {
            let modal = document.getElementById("dataModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("openReadMoreModal").onclick = function () {
            document.getElementById("readMoreModal").style.display = "block";
        };

        document.getElementById("closeReadMoreModal").onclick = function () {
            document.getElementById("readMoreModal").style.display = "none";
        };

        window.addEventListener("click", function (event) {
            let modal = document.getElementById("readMoreModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
@endsection