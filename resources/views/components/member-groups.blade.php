<article className="member-groups">
    {{ $slot }}
    
    {groups.map((group, i) => (
        <Link
            key={i}
            to={`/group/${group.slug}`}
            className="member-groups__group"
        >
            <p>{group.name}</p>
        </Link>
    ))}
</article>