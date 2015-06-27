<div id="rg_wrapper">
    <div id="header">
        <a href="<?php echo site_url(); ?>" class="logo1"></a>
    </div>
    <div id="content">
        <div id="rg" style="padding-top:0px; padding-bottom:0px;">
            <div class="registext">
                <?php echo validation_errors(); ?>
                
                <?php echo form_open('register', array('id' => 'form')); ?>
                    <p>
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" class="input_type" value="<?php echo set_value('company_name'); ?>"><br />
                        <label for="industry">Industry</label>
                        <input type="text" name="industry" class="input_type" value="<?php echo set_value('industry'); ?>"><br />
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="input_type" value="<?php echo set_value('first_name'); ?>"><br />
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="input_type" value="<?php echo set_value('last_name'); ?>"><br />
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="input_type" value="<?php echo set_value('designation'); ?>"><br />
                        <label for="email">Email</label>
                        <input type="text" name="email" class="input_type" value="<?php echo set_value('email'); ?>"><br />
                        <label for="office_number">Office Number</label>
                        <input type="text" name="office_number" class="input_type" value="<?php echo set_value('office_number'); ?>"><br />
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" name="mobile_number" class="input_type" value="<?php echo set_value('mobile_number'); ?>">
                        <span><input type="checkbox" id="contact" name="contact" />&nbsp;&nbsp;Yes, please contact me for the details of this event.</span> 
                        <span><input type="checkbox" name="subscription" value="1" />&nbsp;&nbsp;Yes, send me exclusive Dell offers and specials through my contact details.<br />
                        (You can unsubscribe at any time) Please refer to <a href="#" id="privacy">Dell's Online Privacy Policy.</a></span>
                    </p>
                    <h3>
                        *All are required except Mobile number.
                    </h3>
                    <p>
                        <input type="submit" name="submit" value="" class="btn_send" />
                    </p>
                    <p></p>
                    <p></p>                
                </form>
            </div>
        </div>
    </div>
    <div id="footer">
		<img src="<?php echo base_url(); ?>images/footer.jpg" border="0"/>
	</div>
</div>

<script>
$('#form').submit(function() {
    if ($('#contact').attr("checked")) {
        return true
    } else {
        $( "#click_dialog" ).dialog({
            modal: true
        });    
        
        return false
    }
});
</script>

<script>
    $("#privacy").click(function() {                   
        $( "#dialog" ).dialog({
            modal: true,
            minHeight: 300,
            minWidth: 300,
            height: 600,
            width: 800,
            buttons: {
                Ok: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    });
</script>

<div id="click_dialog" title="Click Privacy Policy" class="hide" style="display:none">
    <p>It is mandatory to agree on, Yes, Please contact me for details of this event in order to proceed.</p>
</div>

<div id="dialog" title="Privacy Policy" class="hide" style="display:none">
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=5><B>Dell's Privacy
Policy</B></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=1 CELLSPACING=0>
	<COL WIDTH=4367>
	<TR>
		<TD WIDTH=4367>
			<P><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/privacy?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>Dell
EqualLogic Warranty and Support Information</U></FONT></FONT></FONT></A></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell respects your
privacy. Across our business, around the world, we will only collect,
store and use your personal information for defined purposes. We use
your information to support and enhance our relationship with you,
for example, to process your purchase, provide service and support,
and share product, service and company news and offerings with you.
We safeguard and protect against unauthorized access, use and
disclosure of your information by using appropriate measures and
processes to maintain security. We do not sell your personal
information. We only share your personal data outside the Dell family
of companies with your consent, as required by law or to protect
Dell, its customers, or the public, or with companies that help Dell
fulfill its obligations with you, and then only with partners who
share Dell's commitment to protecting your privacy and data. At any
time you may contact Dell with any privacy questions or concerns you
may have. You also may ask at any time to see the personal data you
have given us and request correction or deletion. We strive to
protect the security of your personal data by use of appropriate
measures and processes. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Privacy and Data
Security</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>At Dell, your right
to privacy and data security is a primary concern. That's why, when
you visit dell.com, we help you maintain control over your personal
data on the Internet. Below are the guidelines we use for protecting
the information you provide us during a visit to our Internet sites
(</FONT></FONT><A HREF="http://www1.ap.dell.com/ap/en/gen/df.aspx?refid=df&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>www.dell.com/ap</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>)
or when you use our online support offerings such as
</FONT></FONT><A HREF="http://support.ap.dell.com/support/index.aspx?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>support.ap.dell.com</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
Other Dell and Dell Co-branded sites may operate under their own
privacy and security policies.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell only asks for
specific types of personal information</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>In a few areas on
our Web site and online customer support tools, we ask you to provide
information that will enable us to enhance your site visit, to assist
you with purchase and technical support issues or to follow up with
you after your visit. It is completely optional for you to
participate.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>For example, we
request information from you when you:</FONT></FONT></P>
<OL>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Register on
	dell.com</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Request a quote</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Place an order</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Provide feedback in
	an online survey</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Participate in a
	sweepstakes or other promotional offer</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Request e-mail
	notification of your order status (called &quot;Order Watch&quot;)</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Subscribe to a
	newsletter or a mailing list</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Request assistance
	from our &quot;Product Advisor&quot;</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Fill out a support
	request</FONT></FONT></P>
</OL>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Information we may
request includes your name, e-mail address, phone number, address,
type of business, credit card details, customer preference,
experience, demographic and interest information, customer number and
service tag number, as well as other similar personal information.
Should you choose to apply for credit through our financial service
providers, we may also ask for your income, bank account numbers and
other information needed to verify identity, financial status and to
process your credit request. If we ever ask for significantly
different information we will inform you. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell only uses your
personal information for specific purposes</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>The information you
provide will be kept confidential and used to support your customer
relationship with Dell. Among other things, we want to help you
quickly find information on dell.com and alert you to product
upgrades, special offers, updated information and other new products
and services from Dell. Agents or contractors of Dell who have access
to your personal information and prospect information are required to
keep the information confidential and not use it for any other
purpose than to carry out the services they are performing for Dell.
Dell may enhance or merge your information collected at its site with
data from third parties for purposes of marketing products or
services to you.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>In addition, Dell
may be required to disclose personal information in connection with
law enforcement, fraud prevention, regulation, and other legal action
or if Dell reasonably believes it is necessary to do so to protect
Dell, its customers, or the public.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell will not
disclose your personal information to any outside organization for
its use in marketing without your consent</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Information
regarding you (such as name, address and phone number) or your order
and the products you purchase will not be given or sold to any
outside organization for its use in marketing or solicitation without
your consent. Your information may be shared with agents or
contractors of Dell for the purpose of performing services for Dell.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Internet Commerce</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>The online store at
dell.com is designed to give you options concerning the privacy of
your credit card information, name, address, e-mail and any other
information you provide us. Dell is committed to data security with
respect to information collected on our site. We offer the industry
standard security measures available through your browser called SSL
encryption, (please see Dell's Store Security page for details on
these security measures). If at any time you would like to make a
purchase, but do not want to provide your credit card information
online, you may </FONT></FONT><A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/topics/contacts/en/contact_sales?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>contact</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
a sales representative over the telephone. It has always been a Dell
practice to contact customers in the event of a potential problem
with your purchase or any normal business communication regarding
your purchase.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Customized
Experience</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>New technologies are
emerging on the Internet that help us deliver customized visitor
experiences. At Dell, we primarily use &quot;cookies&quot; to help us
determine which service and support information is appropriate to
your machine and to maintain your shopping experience in our online
store. Our use of this technology does not mean that we automatically
know any information about you. We might be able to ascertain what
type of computer you are using, but beyond that, our use of cookies
is designed only to provide you with a better experience when using
www.dell.com. Dell has no desire or intent to infringe on your
privacy while using the dell.com site. For more information about
these new technologies on dell.com visit our </FONT></FONT><A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/cookies?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>Cookies</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
page.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Third-Party Sites</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Please be aware that
other web sites that may be accessed through our site may collect
personally identifiable information about you. The information
practices of those third-party web sites linked to Dell.com are not
covered by this privacy statement. We use the &quot;</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>&quot;
symbol to mark links that go to third-party sites.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>You are solely
responsible for maintaining the secrecy of your passwords or any
account information. Please be careful and responsible whenever
you're online. If you post personal information online that is
accessible to the public, you may receive unsolicited messages from
other parties in return. While we strive to protect your personal
information, Dell cannot ensure or warrant the security of any
information you transmit to us, and you do so at your own risk.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Other Web sites</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell's Web sites
contain links to other Web sites that are not operated by Dell. Dell
is not responsible for the privacy practices of the Web sites that it
does not operate. Some parts of the Web site are animated using
downloadable applications with Macromedia's Shockwave/Flash. We also
may make video available through RealNetwork's Media-Player, and use
the video hosting services of Broadcast.com. Futures-Careers,
Macromedia, RealNetworks, and Broadcast.com operate under their own
privacy and security policies, and the way they may collect and use
information can be further evaluated at: </FONT></FONT><A HREF="http://www.macromedia.com/"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>www.macromedia.com</U></FONT></FONT></FONT></A><A HREF="http://www.macromedia.com/"></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,
</FONT></FONT><A HREF="http://www.realnetworks.com/"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>www.realnetworks.com</U></FONT></FONT></FONT></A><A HREF="http://www.realnetworks.com/"></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,
and www.broadcast.com.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Contact Dell</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell is the sole
operator of the Dell Web sites. If you would like to contact us for
any reason regarding our privacy practices, please write to us at the
following address:</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell
Singapore Pte Ltd</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Attention:
Privacy Steward</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>180
Clemenceau Avenue</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#06-01
Haw Par Center</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Singapore
239922 </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>You may also </FONT></FONT><A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/topics/forms/en/privacy?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>click
here</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
and fill out the e-mail form: &quot;Dell Privacy Policy Information
Feedback/Request&quot;.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell wants to help
you keep your personal information accurate</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>To update your
individual information that has been stored, please visit the Dell
Subscription Center section of the Dell website.</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>You can request or
update your individual information, that Dell has collected, by
submitting a request </FONT></FONT><A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/topics/forms/en/privacy?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>here</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
or simply </FONT></FONT><A HREF="http://www1.ap.dell.com/content/topics/topic.aspx/ap/topics/contacts/en/contact_cust?c=ap&amp;l=en&amp;s=gen"><FONT COLOR="#0000ff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><U>phone</U></FONT></FONT></FONT></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
a Dell customer support representative. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Changes to the
Policy</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Privacy Statement
Effective Date: June 30, 2004</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
</FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Material changes to
this policy will be posted on Dell's website for 30 days. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%"><A NAME="inf"></A>
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Dell Equallogic
Warranty and Support Information</FONT></FONT></P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>LIMITED WARRANTY</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>This
Limited Warranty is made as of the date of shipment of the Products
to the Customer (the &quot;Effective Date&quot;) by and between Dell
Inc, its subsidiaries and affiliates, with offices at 300 Innovative
Way, Suite 301, Nashua, NH 03062 (&quot;collectively &quot;the
Company&quot;), and the Customer (as defined below). </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>1. Definitions. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>In
addition to the terms defined elsewhere in this Agreement, the
following terms whenever used in this Agreement shall have the
following meanings: </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Customer&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means the end user of the Products. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Hardware&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means the Dell EqualLogic PS Series branded array hardware along with
any end user manuals supplied by the Company. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Maintenance
Releases&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means any update, upgrade, revision, patch, bug fix or an improved,
upgraded or enhanced version of the Products released by the Company
to which Customer is rightfully entitled by way of a valid
maintenance agreement, warranty, or other Company offering. Third
Party Products are excluded and subject to their own terms and
conditions. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Object
Code&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means computer programs assembled, compiled, or converted to magnetic
or electronic binary form on software or hardware media, which are
readable and usable by computer equipment, but not generally readable
by humans without reverse assembly, reverse compiling, reverse
conversion, reverse engineering and/or any other disassembly or
decompilation. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Product(s)&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means, collectively, the Hardware and Software which may be supplied
to Customer. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Software&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means all components of the Company's storage management software and
related documentation made generally available by the Company from
time to time not accompanied by its own license agreement. The term
&quot;Software&quot; shall include any and all software, scripts,
firmware, and microcode running on Hardware or any computer system,
including all Maintenance Releases supplied in accordance with this
Agreement. The Software shall be provided in Object Code form only.
No source code will be provided. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Third
Party Products&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
means any hardware or software licensed or distributed by the Company
to Customer that is not owned by the Company. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>EXCEPT AS EXPRESSLY
SET FORTH IN THIS LIMITED WARRANTY, THE COMPANY MAKES NO OTHER
WARRANTIES OR CONDITIONS, EXPRESSED OR IMPLIED, INCLUDING ANY IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE,
TITLE AND NONINFRINGEMENT. THE COMPANY EXPRESSLY DISCLAIMS ALL
WARRANTIES AND CONDITIONS NOT STATED IN THIS LIMITED WARRANTY. ANY
IMPLIED WARRANTIES THAT MAY BE IMPOSED BY LAW ARE LIMITED IN DURATION
TO THE LIMITED WARRANTY PERIOD. SOME STATES OR COUNTRIES DO NOT ALLOW
A LIMITATION ON HOW LONG AN IMPLIED WARRANTY LASTS OR THE EXCLUSION
OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES FOR CONSUMER
PRODUCTS. IN SUCH STATES OR COUNTRIES, SOME EXCLUSIONS OR LIMITATIONS
OF THIS LIMITED WARRANTY MAY NOT APPLY TO YOU. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>This Limited
Warranty applies only to Products sold by the Company or their
authorized resellers. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>The Company warrants
that the Products that you have purchased from the Company, or their
authorized resellers, are free from defects in materials or
workmanship under normal use during the Limited Warranty Period. The
Limited Warranty Period starts on the later of the date of shipment
from the Company or its authorized resellers to you. Products must be
registered with the Company to receive warranty service. You are
entitled to warranty service according to the terms and conditions of
this document if a repair to your Product is required within the
Limited Warranty period. This Limited Warranty extends to the
original end user purchaser and is not transferable. This Limited
Warranty is applicable in all countries and will be honored in any
country where the Company or their authorized service providers offer
warranty service, subject to the terms and conditions set forth in
this Limited Warranty. Warranty service availability and response
times may vary from country to country and may also be subject to
registration requirements in the country of purchase. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Replacement parts
may be new or refurbished equipment. Replacement parts are warranted
to be free from defects in material or workmanship for thirty (30)
days or for the remainder of the Limited Warranty Period of the
Product in which they are installed, whichever is longer. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>During the Limited
Warranty Period, the Company will repair or replace any defective
component. This is your exclusive remedy for defective products. the
Company reserves the right to elect, at its sole discretion, to give
you a refund of your purchase price instead of a replacement. All
component parts or Products removed under the Limited Warranty become
the property of the Company. The Limited Warranty does not apply to
expendable parts and does not extend to any Product from which the
serial number has been removed or that has been damaged or rendered
defective (a) as a result of accident, misuse, improper installation,
abuse or other external causes, including but not limited to fire,
earthquake, flood, natural or unnatural disaster, exposure to
chemicals (or levels of chemicals) not ordinarily found in a computer
operating environment, or act of God; (b) by operation outside the
usage parameters (including, but not limited to, temperature
maximums) stated in the user documentation that shipped with the
Product;(c) by use of parts not manufactured or sold by the Company;
or (d) by modification or service by anyone other than (i) the
Company, (ii) a Company authorized service provider, or (iii) your
own installation of end user replaceable Company parts. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Although the Company
is not under any obligation to provide warranty service for Product
damaged in any of the ways mentioned herein, the Company may, in its
sole discretion, agree to provide additional service for such
Products if, after inspection by an authorized Company
representative, the Company determines that the Product is still in
acceptable operating condition. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>These terms and
conditions constitute the complete and exclusive warranty agreement
between you and the Company regarding the Product you have purchased.
These terms and conditions supersede any prior agreements or
representations, including representations made in Company sales
literature or advice given to you by the Company or an agent or
employee of the Company that may have been made in conjunction with
your purchase of the Product. No change to the conditions of this
Limited Warranty is valid unless it is made in writing and signed by
an authorized representative of the Company. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>THE ABOVE WARRANTIES
DO NOT APPLY TO DEFECTS RESULTING FROM IMPROPER OR INADEQUATE
MAINTENANCE BY CUSTOMER; UNAUTHORIZED MODIFICATION; IMPROPER USE;
OPERATION OUTSIDE OF SPECIFICATIONS OR SUPPORTED CONFIGURATIONS FOR
THE PRODUCT; ABUSE, NEGLIGENCE, ACCIDENT, LOSS OR DAMAGE IN TRANSIT;
IMPROPER SITE PREPARATION; OR UNAUTHORIZED MAINTENANCE OR REPAIR. THE
COMPANY DOES NOT WARRANT THAT THE OPERATION OF THIS PRODUCT WILL BE
UNINTERRUPTED OR ERROR-FREE. THE COMPANY IS NOT RESPONSIBLE FOR
DAMAGE THAT OCCURS AS A RESULT OF YOUR FAILURE TO FOLLOW THE
INSTRUCTIONS SUPPLIED WITH THE PRODUCT, INCLUDING, BUT NOT LIMITED
TO, THOSE INSTRUCTIONS RELATING TO SAFETY MEASURES TO BE OBSERVED
WHEN INSTALLING AND/OR PERFORMING MAINTENANCE ON THE PRODUCT. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>YOU SHOULD MAKE
PERIODIC BACKUP COPIES OF THE DATA STORED ON YOUR PRODUCT ON THE
STORAGE MEDIUM OF YOUR CHOOSING AS A PRECAUTION AGAINST POSSIBLE
FAILURES, ALTERATIONS, OR LOSS OF DATA. BEFORE RETURNING ANY UNIT FOR
SERVICE, BE SURE TO BACK UP DATA AND REMOVE ANY CONFIDENTIAL,
PROPRIETARY, OR PERSONAL DATA. THE COMPANY IS NOT RESPONSIBLE FOR THE
PRESERVATION OF ANY DATA OR THE PROTECTION OF ANY CONFIDENTIAL OR
PROPRIETARY INFORMATION CONTAINED IN ANY PRODUCT, NOR IS THE COMPANY
RESPONSIBLE FOR THE RESTORATION OR REINSTALLATION OF ANY PROGRAMS OR
DATA OTHER THAN SOFTWARE INSTALLED BY DELL OR EQUALLOGIC WHEN THE
PRODUCT IS MANUFACTURED. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>2. Warranty Period
and Replacement Parts. </FONT></FONT>
</P>
<TABLE WIDTH=616 BORDER=0 CELLPADDING=1 CELLSPACING=0>
	<COL WIDTH=614>
	<TR>
		<TD WIDTH=614>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>The warranty
			period for a Product is a specified, fixed period commencing on
			the original date of shipment from Dell to the Purchaser of the
			Product. </FONT></FONT>
			</P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Warranty Service on
Dell EqualLogic Products </FONT></FONT>
</P>
<UL>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 year next
	business day replacement on parts </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 year Software
	updates </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 year telephone &amp;
	email support during local business hours, excluding local national
	holidays </FONT></FONT>
	</P>
</UL>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Note:</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
Service offerings may vary by geographic region. For supported
Products purchased from Dell Value Added Resellers (&quot;VAR&quot;),
the Customer may contact Dell or the VAR to identify applicable
service levels. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Enhancements to this
limited warranty may be purchased through a separate Service
Partnership Agreement available on your Product Contact your nearest
Dell Sales office for more information. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>During the Limited
Warranty period, the Company will repair or replace defective parts
returned to the Company's facility. As part of warranty repairs, the
Company may require that the system software/firmware be brought up
to date. To request Limited Warranty parts replacement service, you
must contact the Company's Customer Service Department within the
Limited Warranty period. If Limited Warranty parts replacement
service is required, the Company will issue a Return Material
Authorization Number. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>If a part to be
replaced falls within the warranty period, the Company will ship the
replacement part via express shipping prior to receiving the
defective part from you. You must ship the defective part back to the
Company in its original or equivalent packaging, prepay shipping
charges, and insure the shipment or accept the risk of loss or damage
during shipment. If the failed part is not received by the Company
within fifteen (15) business days from the date the replacement part
was dispatched to customer, or the unit is not returned in the
specified packaging, the customer will be invoiced at the list price
for the replacement part. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>The package must be
labeled on the exterior of the shipping carton with the RMA number
provided by the Company customer service. Products returned will not
be accepted if there is damage due to external causes, including
accident, abuse, misuse, natural and unnatural disasters, acts of
God, problems with electrical power, servicing not authorized by the
Company, usage not in accordance with product instructions, failure
to perform required preventive maintenance, problems caused by use of
parts and components not supplied by the Company, and damage incurred
during shipment of defective parts to the Company for repair. If
damage is evident from these causes, the CUSTOMER will be invoiced at
the list price for the replacement parts. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Contacting Support </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>If
your product fails during the warranty period and the troubleshooting
suggestions in the product documentation do not solve the problem,
you can receive support by contacting the Company via telephone: </FONT></FONT>
</P>
<TABLE WIDTH=720 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=523>
	<COL WIDTH=197>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><A NAME="grid_0"></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Country</B></FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Telephone</B></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Australia</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1800-733-313</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Austria</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0820 240 58
			256 </FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Belgium </FONT></FONT>
			</P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0248 28 690 </FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>China</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>800 858 2606</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Czech Republic</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>22 537 2969</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Denmark</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>32 87 5045</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>European Union
			(EU) / Emerging Markets EMEA</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>+44-207-026-0021</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Finland</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>207 533 566</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>France</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0825 004 686</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Germany</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>699 792 2064</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Greece</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>210 812 8918</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Holland</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0206 74 59 14</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Hong Kong</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>2969-3196</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>India</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1800-425-9045</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Ireland</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1850 964 270</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Italy</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>269 63 3793</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Japan</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0120-912-740</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Korea</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>080-860-9918</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Luxembourg</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>24871036</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Macau</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0800-105</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Malaysia</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1800-088-1304</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>New Zealand</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>800-44-3561</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Norway</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>67 11 75 16</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Poland</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>22 579 5978</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Portugal</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>217 61 6090</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Singapore</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1800-394-7447</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Slovakia</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>25 750 6981</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>South Africa</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>11 709 7729</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Spain</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>902 003 685</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Sweden</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>8 5900 5516</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Switzerland</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0848 33 00 92</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Taiwan</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>801-601-269</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Thailand</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1800-006-0005</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>UK</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>0844 444 3844</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=523>
			<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>USA / Canada</FONT></FONT></P>
		</TD>
		<TD WIDTH=197>
			<TABLE WIDTH=415 BORDER=0 CELLPADDING=1 CELLSPACING=0>
				<COL WIDTH=413>
				<TR>
					<TD WIDTH=413>
						<P><FONT FACE="Times New Roman, serif"><FONT SIZE=3>800-945-3355</FONT></FONT></P>
					</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Be sure you have the
following information available before you call: </FONT></FONT>
</P>
<UL>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Product service
	tag, model name, and model number </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Applicable error
	messages </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Operating system
	type and revision </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Make and model of
	any iSCSI initiators </FONT></FONT>
	</P>
</UL>
<P STYLE="margin-top: 0.07in; margin-bottom: 0.07in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Out of Warranty /
Out of Support Services </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Out
of warranty / Out of Support services are available from the Company
under the Company's standard terms and conditions. </FONT></FONT>
</P>
</div>