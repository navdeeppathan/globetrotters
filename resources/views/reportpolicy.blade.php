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

            <h3>Introduction</h3>
            <p>
                In accordance with the Finance Act 2016, Globetrotters Holdings Plc and its UK subsidiaries
                present their UK Tax Strategy for the year ended 31 March 2024. This strategy applies to all
                UK taxes relevant to the Group and is approved annually by the Board of Directors.
            </p>

            <h3>Tax Governance and Risk Management</h3>
            <p>
                The Group is committed to being a responsible taxpayer and proactively managing tax risks.
                Policies, procedures, and controls are implemented and monitored by the Finance Department
                under the supervision of the Group Finance Director.
            </p>

            <p>
                External tax advisors are consulted when necessary, particularly in cases of new legislation
                or uncertainty, ensuring compliance and minimizing risk.
            </p>

            <p>
                Daily tax operations are handled by qualified in-house accountants led by the Group Finance
                Director, supported by experienced finance professionals.
            </p>

            <h3>Attitude Towards Tax Planning</h3>
            <p>
                The Group does not engage in artificial tax planning. All tax arrangements are aligned with
                commercial activities and comply with applicable legislation.
            </p>

            <p>
                The Group may utilize government incentives, reliefs, and exemptions to support business
                growth and enhance shareholder value.
            </p>

            <p>
                In cases of uncertainty, professional advice is sought before proceeding with transactions.
            </p>

            <h3>Approach Towards HMRC</h3>
            <p>
                The Group maintains an open, honest, and transparent relationship with HMRC, ensuring timely
                and accurate reporting, disclosures, and responses to queries.
            </p>

            <p>
                The company is committed to proactive communication with HMRC and full compliance with all
                regulatory requirements.
            </p>

        </div>
    </div>
    <div id="dataModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeDataModal">&times;</span>

            <h2>DATA PROTECTION POLICY</h2>

            <h3>1. Context and Overview</h3>
            <p>
                Globetrotters collects and uses personal data relating to customers, suppliers, employees,
                and business contacts. This policy explains how such data must be handled to comply with
                data protection laws and best practices.
            </p>

            <h4>Why this Policy exists</h4>
            <ul>
                <li>To comply with data protection law</li>
                <li>To protect the rights of staff, customers and partners</li>
                <li>To ensure transparency in data handling</li>
                <li>To protect against risks of data breaches</li>
            </ul>

            <h3>Data Protection Principles</h3>
            <ul>
                <li>Data must be processed fairly and lawfully</li>
                <li>Collected for specific lawful purposes</li>
                <li>Adequate, relevant and not excessive</li>
                <li>Accurate and kept up to date</li>
                <li>Not retained longer than necessary</li>
                <li>Processed in line with individual rights</li>
                <li>Protected appropriately</li>
                <li>Not transferred outside EEA without protection</li>
            </ul>

            <h3>2. People, Risks and Responsibilities</h3>
            <p>This policy applies to all staff, departments, contractors and partners handling personal data.</p>

            <h4>Key Responsibilities</h4>
            <ul>
                <li>Board of Directors ensures legal compliance</li>
                <li>Head of Legal manages policies, training, and data requests</li>
                <li>IT Managers ensure system security</li>
                <li>Marketing Managers ensure compliant communications</li>
            </ul>

            <h3>3. General Staff Guidelines</h3>
            <ul>
                <li>Only authorised staff should access data</li>
                <li>Data must not be shared informally</li>
                <li>Use strong passwords and keep data secure</li>
                <li>Delete data when no longer required</li>
            </ul>

            <h3>4. Data Storage</h3>
            <ul>
                <li>Paper records must be securely stored</li>
                <li>Electronic data must be password protected</li>
                <li>Use approved systems and secure servers</li>
                <li>Regular backups must be maintained</li>
            </ul>

            <h3>5. Data Use</h3>
            <ul>
                <li>Data must be used only for valid purposes</li>
                <li>Must be encrypted when transferred</li>
                <li>Must not be shared externally without authority</li>
            </ul>

            <h3>6. Data Accuracy</h3>
            <ul>
                <li>Data must be kept accurate and updated</li>
                <li>Incorrect data must be corrected or deleted</li>
            </ul>

            <h3>7. Subject Access Requests</h3>
            <p>
                Individuals have the right to request access to their personal data and understand how it is used.
            </p>

            <h3>8. Disclosing Data</h3>
            <p>
                Data may be disclosed to law enforcement where legally required, ensuring legitimacy of requests.
            </p>

            <h3>9. Providing Information</h3>
            <p>
                Globetrotters ensures individuals understand how their data is used and their rights.
            </p>

            <h3>10. Related Policies</h3>
            <ul>
                <li>Privacy Notices</li>
                <li>IT Policy</li>
                <li>Records Management Policy</li>
            </ul>

        </div>
    </div>
    <div id="readMoreModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeReadMoreModal">&times;</span>

            <h2>DATA PROTECTION PRIVACY NOTICE – CUSTOMERS</h2>

            <h3>1. Introduction</h3>
            <p>
                This Privacy Notice explains how Globetrotters collects, uses, and protects personal information
                relating to customers and individuals connected to their business. It applies even after your
                relationship with us ends.
            </p>

            <h3>2. Information We Collect</h3>
            <ul>
                <li>Personal details (name, contact information)</li>
                <li>Email, phone number, company role</li>
                <li>Market research responses</li>
                <li>Login and account data</li>
                <li>Communication records (email, calls, etc.)</li>
                <li>Cookies and browsing data</li>
                <li>Financial and risk-related information</li>
            </ul>

            <h3>3. How We Use Information</h3>
            <ul>
                <li>Providing and managing services</li>
                <li>Processing agreements</li>
                <li>Improving services and customer experience</li>
                <li>Marketing and communication</li>
                <li>Risk management and analytics</li>
                <li>Legal compliance</li>
            </ul>

            <h3>Tracking & Monitoring</h3>
            <p>
                Interactions such as calls, emails, meetings, and CCTV recordings may be monitored to improve
                services and ensure security.
            </p>

            <h3>4. Sharing Information</h3>
            <ul>
                <li>With group companies and service providers</li>
                <li>With regulators, courts, and legal authorities</li>
                <li>With insurers and auditors</li>
                <li>With authorised third parties</li>
            </ul>

            <h3>5. Data Retention</h3>
            <p>
                Information is typically stored for up to 6 years after the relationship ends, unless longer
                retention is required by law.
            </p>

            <h3>6. Your Rights</h3>
            <ul>
                <li>Access your data</li>
                <li>Correct or update data</li>
                <li>Request deletion</li>
                <li>Restrict or object to processing</li>
                <li>Withdraw consent</li>
            </ul>

            <h3>7. Credit Checks</h3>
            <p>
                Credit and identity checks may be performed using credit reference agencies to assess risk
                and manage accounts.
            </p>

            <h3>8. Data Security</h3>
            <p>
                Data is protected using encryption, secure systems, and strict access controls.
            </p>

            <h3>9. Contact</h3>
            <p>
                For more information, contact Globetrotters at info@daviesturner.co.uk
            </p>

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