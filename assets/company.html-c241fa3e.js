import{_ as o,M as p,p as c,q as i,R as a,t as n,N as s,a1 as t}from"./framework-5866ffd3.js";const l={},d=t(`<h1 id="company" tabindex="-1"><a class="header-anchor" href="#company" aria-hidden="true">#</a> Company</h1><h2 id="operations" tabindex="-1"><a class="header-anchor" href="#operations" aria-hidden="true">#</a> Operations</h2><h3 id="list-all-companies" tabindex="-1"><a class="header-anchor" href="#list-all-companies" aria-hidden="true">#</a> List all companies</h3><p>Using the <code>get()</code> method you can get a collection of all companies in the organization.</p><div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h3 id="get-a-company-by-name" tabindex="-1"><a class="header-anchor" href="#get-a-company-by-name" aria-hidden="true">#</a> Get a company by name</h3><p>Using the <code>find()</code> method you can get a company by name.</p><div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">find</span><span class="token punctuation">(</span><span class="token variable">$name</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h3 id="create-a-company" tabindex="-1"><a class="header-anchor" href="#create-a-company" aria-hidden="true">#</a> Create a company</h3>`,9),u=a("code",null,"create()",-1),r=a("br",null,null,-1),h=a("code",null,"create()",-1),m=a("code",null,"$data",-1),k=a("code",null,"$data",-1),y={href:"https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest",target:"_blank",rel:"noopener noreferrer"},f=t(`<div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">create</span><span class="token punctuation">(</span><span class="token variable">$data</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h3 id="update-a-company" tabindex="-1"><a class="header-anchor" href="#update-a-company" aria-hidden="true">#</a> Update a company</h3>`,2),g=a("code",null,"update()",-1),_=a("br",null,null,-1),b=a("code",null,"update()",-1),v=a("code",null,"$name",-1),x=a("code",null,"$data",-1),w=a("code",null,"$name",-1),$=a("code",null,"$data",-1),A={href:"https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest",target:"_blank",rel:"noopener noreferrer"},q=t(`<div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">update</span><span class="token punctuation">(</span><span class="token variable">$name</span><span class="token punctuation">,</span> <span class="token variable">$data</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><div class="custom-container warning"><p class="custom-container-title">Note</p><p>To add new values or update existing values, submit the new or updated portion of the company profile along with the rest of the existing company profile, even if no values are changing.</p><p>To delete attributes from a company profile, submit the entire profile without the attributes that you want to delete.</p></div><h3 id="delete-a-company" tabindex="-1"><a class="header-anchor" href="#delete-a-company" aria-hidden="true">#</a> Delete a company</h3><p>Using the <code>delete()</code> method you can delete a company by it&#39;s name.</p><div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">delete</span><span class="token punctuation">(</span><span class="token variable">$name</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h3 id="change-the-status-of-a-company" tabindex="-1"><a class="header-anchor" href="#change-the-status-of-a-company" aria-hidden="true">#</a> Change the status of a company</h3><p>Using the <code>updateStatus()</code> method you can change the status of a company by it&#39;s name.<br> the <code>updateStatus()</code> method accepts two parameters <code>$name</code> and <code>$status</code> where <code>$name</code> is the name of the company you want to update and <code>$status</code> is the new status of the company. e.g. active, inactive.</p><div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token class-name class-name-fully-qualified static-context"><span class="token punctuation">\\</span>Lordjoo<span class="token punctuation">\\</span>Apigee<span class="token punctuation">\\</span>Facades<span class="token punctuation">\\</span>Apigee</span><span class="token operator">::</span><span class="token function">company</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-&gt;</span><span class="token function">updateStatus</span><span class="token punctuation">(</span><span class="token variable">$name</span><span class="token punctuation">,</span> <span class="token variable">$status</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h2 id="entity" tabindex="-1"><a class="header-anchor" href="#entity" aria-hidden="true">#</a> Entity</h2><h3 id="properties" tabindex="-1"><a class="header-anchor" href="#properties" aria-hidden="true">#</a> Properties</h3>`,10),T=a("thead",null,[a("tr",null,[a("th",null,"Property"),a("th",null,"Type"),a("th",null,"Description")])],-1),C=a("tr",null,[a("td",null,"name"),a("td",null,"string"),a("td",null,"The name of the company.")],-1),L=a("tr",null,[a("td",null,"displayName"),a("td",null,"string"),a("td",null,"The display name of the company.")],-1),N=a("tr",null,[a("td",null,"organization"),a("td",null,"string"),a("td",null,"The organization of the company.")],-1),U=a("tr",null,[a("td",null,"status"),a("td",null,"string"),a("td",null,"The status of the company. e.g. active, inactive.")],-1),j=a("td",null,"createdAt",-1),F={href:"https://carbon.nesbot.com/docs/",target:"_blank",rel:"noopener noreferrer"},B=a("td",null,"The date and time the company was created.",-1),R=a("td",null,"lastModifiedAt",-1),E={href:"https://carbon.nesbot.com/docs/",target:"_blank",rel:"noopener noreferrer"},M=a("td",null,"The date and time the company was last modified.",-1),S=a("tr",null,[a("td",null,"lastModifiedBy"),a("td",null,"Carbon"),a("td",null,"The user who last modified the company.")],-1),V=a("tr",null,[a("td",null,"createdBy"),a("td",null,"string"),a("td",null,"The user who created the company.")],-1),z=t(`<h3 id="methods" tabindex="-1"><a class="header-anchor" href="#methods" aria-hidden="true">#</a> Methods</h3><p>A list of quick actions you can perform on the company entity without the need to use the operations bellow.</p><h4 id="deactivate" tabindex="-1"><a class="header-anchor" href="#deactivate" aria-hidden="true">#</a> deactivate()</h4><p>change the status of the company to inactive.</p><h4 id="activate" tabindex="-1"><a class="header-anchor" href="#activate" aria-hidden="true">#</a> activate()</h4><p>change the status of the company to active.</p><h4 id="update-array-data" tabindex="-1"><a class="header-anchor" href="#update-array-data" aria-hidden="true">#</a> update(array $data)</h4><p>update the company properties.</p><div class="language-php line-numbers-mode" data-ext="php"><pre class="language-php"><code><span class="token variable">$company</span><span class="token operator">-&gt;</span><span class="token function">update</span><span class="token punctuation">(</span><span class="token variable">$data</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><h4 id="delete" tabindex="-1"><a class="header-anchor" href="#delete" aria-hidden="true">#</a> delete()</h4><p>delete the company.</p>`,11);function D(I,P){const e=p("ExternalLinkIcon");return c(),i("div",null,[d,a("p",null,[n("Using the "),u,n(" method you can create a company,"),r,n(" the "),h,n(" method accepts one parameter "),m,n(" where "),k,n(" is an array of the company properties "),a("a",y,[n("CompanyRequest"),s(e)])]),f,a("p",null,[n("Using the "),g,n(" method you can update a company,"),_,n(" the "),b,n(" method accepts two parameters "),v,n(" and "),x,n(" where "),w,n(" is the name of the company you want to update and "),$,n(" is an array of the company properties "),a("a",A,[n("CompanyRequest"),s(e)])]),q,a("table",null,[T,a("tbody",null,[C,L,N,U,a("tr",null,[j,a("td",null,[a("a",F,[n("Carbon"),s(e)])]),B]),a("tr",null,[R,a("td",null,[a("a",E,[n("Carbon"),s(e)])]),M]),S,V])]),z])}const O=o(l,[["render",D],["__file","company.html.vue"]]);export{O as default};
